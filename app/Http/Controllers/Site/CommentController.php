<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\Subscription;

class CommentController extends Controller
{
    //

    /* public function index(){
        $response['comment'] = Comment::orderByDesc('id');

        return view($response);
    } */

    public function store(Request $request, $newsId)
    {

        // Verificar se está subscrito
        /* $subscribedEmail = $request->cookie('subscribed');
        if (!$subscribedEmail) {
            return back()->with('error', 'Apenas subscritos podem comentar.');
        } */

        $email = $request->cookie('subscribed');

        if (!$email) {
            return back()->with('error', 'É necessário subscrever primeiro.');
        }

         // Encontrar ou criar subscritor
        $subscriber = Subscription::firstOrCreate(['email' => $email]);

        // Validar texto
        $request->validate([
            'text_comment' => 'required|string|max:2000',
            'parent_id'    => 'nullable|exists:comments,id',
        ]);

        // Criar comentário com email do cookie
        Comment::create([
            'text_comment' => $request->text_comment,
            'subscribed_id' => $subscriber->id,
            'news_id' => $newsId,
            'parent_id' => $request->parent_id,
        ]);
        /* dd($email); */


        return back()->with('success', 'Comentário adicionado com sucesso!');
    }
}
