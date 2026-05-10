<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\News;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Http\Request;

class RelatorioController extends Controller
{
    //
    public function formReports()
    {

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

        return view('components.modal-relatorio', $response);
    }

    public function noticia(Request $request)
    {

        $tipo = $request->form_reports;

        if(!$tipo)
        {
            return redirect()->back()->with('error', 'Selecione o tipo de relatório.');;
        }

        switch($tipo)
        {
            case 'todas':
                $reports = News::orderByDesc('id')->get();
                $titulo = 'Relatório de Notícia';
                break;

            case 'publicado':
                $reports = News::where('status', 'publicado')->get();
                $titulo = 'Relatório das Notícias Publicadas';
                break;

            case 'arquivado':
                $reports = News::where('status', 'arquivado')->get();
                $titulo = 'Relatório das Notícias Arquivadas';
                break;

            case 'rascunho':
                $reports = News::where('status', 'rascunho')->get();
                $titulo  = 'Relatório das Notícias em Rascunho';
                break;

            case 'destaque':
                $reports = News::where('detach', 'destaque')->get();
                $titulo = 'Relatório das Notícias em Destaque';
                break;

            case 'premium':
                $reports = News::where('detach', 'premium')->get();
                $titulo = 'Relatório das Notícias Premium';
                break;

            default:
                return redirect()->back()->with('error', 'Tipo de relatório inválido.');
        }

        $response = [
            'reports' => $reports,
            'titulo' => $titulo,
            'tipo' => $tipo
        ];


        ini_set('max_execution_time', 300);

        /* $response['noticias'] = News::with('category')->orderBy('id', 'DESC')->get(); */

        $pdf = Pdf::loadView('relatorios.news', $response)->setPaper('a3', 'portrait');

        return $pdf->download('relatorio_noticia.pdf');
    }
}
