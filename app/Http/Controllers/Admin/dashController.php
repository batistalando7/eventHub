<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\News;
use App\Models\User;

class dashController extends Controller
{
    //
    public function management()
    {
        $response['publicNews'] = News::where('status', 'publicado')->count();//número de noticias publicadas
        $response['filedNews'] = News::where('status', 'arquivado')->count();//número de notícias arquivadas
        $response['draftNews'] = News::where('status', 'rascunho')->count();//número de notícias em rascunho
        $response['premiumNews'] = News::where('detach', 'premium')->count();//número de notícias premium

        $response['qtdNews'] = News::count();//número total de notícias

        /* Criação de uma função para o calculo de percentagem */
        function percent($part, $total)
        {
            return $total > 0 ? number_format((100 * $part) / $total, 1) : 0;
        }

        $response['publicNewsPrecent'] = percent(($response['publicNews']),$response['qtdNews']);//porcentagem de notícias publicadas
        $response['filedNewsPrecent'] = percent(($response['filedNews']),$response['qtdNews']);//porcentagem de notícias arquivadas
        $response['draftNewsPrecent'] = percent(($response['draftNews']),$response['qtdNews']);//porcentagem de notícias em rascunho
        $response['premiumNewsPrecent'] = percent(($response['premiumNews']),$response['qtdNews']);//porcentagem de notícias premium

        $response['users'] = User::paginate(5);//bucando ustilizadores

        //número de notícias por categoria
        $response['economicNews'] = count( News::whereHas('category', function ($query) {
            $query->whereIn('name', ['Política', 'Políticas']);
        })->orderByDesc('id')->get());

        $response['economicNewsPercent'] = percent(($response['economicNews']),$response['qtdNews'],1);//porcentagem de notícias econômicas
        $response['politicsNews'] = count(News::whereHas('category', function ($query) {
            $query->where('name', 'Política');
        })->get());

        $response['politicsNewsPercent'] = percent(($response['politicsNews']),$response['qtdNews'],1);//porcentagem de notícias políticas
        $response['cultureNews'] = count(News::whereHas('category', function ($query) {
            $query->where('name', 'Cultura');
        })->get());

        $response['cultureNewsPercent'] = percent(($response['cultureNews']),$response['qtdNews'],1);//porcentagem de notícias culturais
        $response['technologyNews'] = count(News::whereHas('category', function ($query) {
            $query->where('name', 'Tecnologia');
        })->get());

        $response['technologyNewsPercent'] = percent(($response['technologyNews']),$response['qtdNews'],1);//porcentagem de notícias tecnológicas
        $response['socialNews'] = count(News::whereHas('category', function ($query) {
            $query->where('name', 'Sociedade');
        })->get());

        $response['socialNewsPercent'] = percent(($response['socialNews']),$response['qtdNews'],1);//porcentagem de notícias sociais
        //fim número de notícias por categoria

        /* Alerts */
        $response['admin'] = Auth::user();
        $response['notifications'] = auth()->user()->notifications()->latest()->get();

        // Adiciona o usuário autor de cada notificação
        $response['notifications']->each(function ($notif) {
            if (isset($notif->data['user_id'])) {
                $notif->user = User::find($notif->data['user_id']);
            } else {
                $notif->user = null;
            }
        });          // todas
        $response['unreadNotifications'] = $response['admin']->unreadNotifications; // não lidas
        $response['unreadCount'] = auth()->user()->unreadNotifications->count();



        return view('_admin.dashboard.crm.index', $response);
    }


}
