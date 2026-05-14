<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\News;
use App\Models\Category;
use App\Models\Advertisement;
use App\Models\Video;

class HomeController extends Controller
{
    public function home()
    {

        /* Noticia da Categoria Politica com mais destaques */
        $response['detachEvents'] = News::where('detach', 'destaque')// apenas notícias destaque
            ->orderByDesc('id') // pega a mais recente
            ->take(3)
            ->get();
        /* fim */
        
        /* evento com mais destaques */
        $response['premiumEvent'] = News::where('detach', 'premium')
            ->orderByDesc('id')
            ->first();
        /* fim */

        /* Sessão Noticia por Categoria - Puxando a noticia mais recente de cada categoria */
        $response['news'] = News::where('status', 'publicado')
            ->whereIn('id', function ($query) {
                $query->selectRaw('MAX(id)')
                    ->from('news')
                    ->where('status', 'publicado')
                    ->groupBy('category_id');
            })
            ->orderBy('created_at', 'desc')
            ->take(6) // limita a 6 categorias no máximo
            ->get();
        /* fim */

        $response['categories'] = Category::take(4)->get();

        /* Modal de Subscrição */
        $response['subscription'] = News::where('status', 'publicado')->where('detach', 'destaque')->orderByDesc('id')->first();

        /* --------- Sessão da Categoria de Notícias (algumas categorias) ----------------- */
        $response['footerCategory'] = Category::select('name')
            ->distinct()
            ->take(5)
            ->get();

        /* Posts Recentes no Footer */
        $response['Recent'] = News::where('status', 'publicado')->orderBy('updated_at', 'desc')->take(2)->get();

        $response['ads'] = Advertisement::orderByDesc('id')->take(1)->get();

        return view('site.home.index', $response);
    }
}
