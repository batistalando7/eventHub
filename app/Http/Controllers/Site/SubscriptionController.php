<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Subscription;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;
use App\Mail\SubscriptionNotificationMail;

class SubscriptionController extends Controller
{
    public function store(Request $request)
    {
        // validação básica do email (sem unique aqui!)
        $request->validate([
            'email' => 'required|email',
        ]);

        // Verificar se já existe na BD
        $subscription = Subscription::where('email', $request->email)->first();

        if ($subscription) {
            // 🔥 Já existe, não cria de novo
            return response()->json([
                'status' => 'subscribed',
                'message' => 'Este email já está subscrito!'
            ])->cookie('subscribed', $request->email, 525600); // renova cookie (1 ano)
        }

        // Criar nova subscrição
        $subscription = Subscription::create([
            'email' => $request->email,
        ]);

        // enviar email de confirmação
        try {
            Mail::to($subscription->email)->queue(new SubscriptionNotificationMail($subscription->email));
        } catch (\Exception $e) {
            Log::error('Erro ao enviar email: ' . $e->getMessage());
        }

        return response()->json([
            'success' => true,
            'message' => 'Obrigado por subscrever! Você receberá notícias em destaque.'
        ])->cookie('subscribed', $request->email, 525600);
    }

}
