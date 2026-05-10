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
        $response['newsDetach'] = News::where('status', 'publicado')
            ->whereIn('detach', ['destaque','premium']) // apenas notícias destaque
            ->orderByDesc('id') // pega a mais recente
            ->take(6)
            ->get();
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

        $response['categories'] = Category::all();

        /* Sessão das Noticias de Hoje */
        $response['today'] = News::where('status', 'publicado')->orderBy('created_at', 'desc')->take(2)->get();
        $response['today1'] = News::where('status', 'publicado')->where('detach', 'destaque')->orderByDesc('id')->first();
        $response['breaknews'] = News::where('status', 'publicado')->where('detach', 'destaque')->orderByDesc('id')->take(3)->get();

        /* Modal de Subscrição */
        $response['subscription'] = News::where('status', 'publicado')->where('detach', 'destaque')->orderByDesc('id')->first();

        /* --------- Sessão da Categoria de Notícias (algumas categorias) ----------------- */

        /* Noticias da categoria Politicas */
        $response['newsPolicy'] = News::where('status', 'publicado')
            ->whereHas('category', function ($query) {
                $query->whereIn('name', ['Política', 'Politícas']);
            })
            ->orderByDesc('id')
            ->take(6)
            ->get();

        /* Noticias da categoria Culturas */
        $response['newsCulture'] = News::where('status', 'publicado')
            ->whereHas('category', function ($query) {
                $query->whereIn('name', ['Cultura', 'Culturas']);
            })
            ->orderByDesc('id')
            ->take(6)
            ->get();

        /* Noticias de Categoria Desportos */
        $response['newsSports'] = News::where('status', 'publicado')
            ->whereHas('category', function ($query) {
                $query->whereIn('name', ['Desporto', 'Desportos']);
            })
            ->orderByDesc('id')
            ->take(6)
            ->get();

        /* --------- Sessão Ciências e Tecnologia */

        /* exibindo a mais recente e destacada */
        $response['newsTech1'] = News::where('status', 'publicado')
            ->where('detach', 'destaque') // apenas notícias destaque
            ->whereHas('category', function ($query) {
                $query->whereIn('name', [
                    'Tecnologia',
                    'Tecnologias',
                    'Ciência',
                    'Ciências'
                ]);
            })
            ->orderByDesc('id') // pega a mais recente
            ->first();


        /* exibindo as 4 primeiras mais recentas */
        $response['newsTech'] = News::where('status', 'publicado')
            ->whereHas('category', function ($query) {
            $query->whereIn('name', ['Tecnologia', 'Tecnologia']);
        })
        ->orderByDesc('id')
        ->take(4)
        ->get();

        /* Sessão de Economia e Negocio */
        $response['Economic'] = News::where('status', 'publicado')
            ->whereHas('category', function ($query) {
            $query->whereIn('name', ['Economia', 'Economias']);
        })
        ->orderByDesc('id')
        ->take(5)
        ->get();

        /* Sessão de Sociedade */
        $response['Society'] = News::where('status', 'publicado')
        ->whereHas('category', function ($query) {
            $query->whereIn('name', ['Sociedade', 'Sociedades']);
        })
        ->orderByDesc('id')
        ->take(5)
        ->get();

        $response['categories'] = Category::where('name')->get();

        $response['footerCategory'] = Category::select('name')
            ->distinct()
            ->take(5)
            ->get();

        /* Sessão de Videos */
        $response['videos'] = Video::where('detach', 'destaque')->orderByDesc('id')->first();

        /* Posts Recentes no Footer */
        $response['Recent'] = News::where('status', 'publicado')->orderBy('updated_at', 'desc')->take(2)->get();

        $response['ads'] = Advertisement::orderByDesc('id')->take(1)->get();

        return view('site.home.index', $response);
    }
}
