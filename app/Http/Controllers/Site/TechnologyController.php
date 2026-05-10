<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\News;
use App\Models\Advertisement;

class TechnologyController extends Controller
{
    public function tech()
    {
        $response['news'] = News::where('status', 'publicado')
            ->whereHas('category', function ($query) {
                $query->whereIn('name', ['Tecnologia', 'Tecnologias']);
            })
            ->orderByDesc('id')
            ->paginate(6);

        $response['categories'] = Category::where('name')->get();

        /* Ultimas noticias - Trás as 3 ultimas noticias*/
        $response['breaknews'] = News::where('status', 'publicado')
            ->where('detach', 'destaque')
            ->orderByDesc('id')
            ->get()
            ->take(3);

        /* Subscrição - mostrando um  modal com a imagem da noticia mais recentes */
        $response['subscription'] = News::where('status', 'publicado')
            ->where('detach', 'destaque')
            ->orderByDesc('id')
            ->first();

        /* Footer - trazendo os primeiros 5 nomes das categorias sem repetir nenhum e trás tmbm as duas ultimas noticias*/
        $response['footerCategory'] = Category::select('name')
            ->distinct()
            ->get()
            ->take(5);

        $response['Recent'] = News::where('status', 'publicado')
            ->orderBy('updated_at', 'desc')
            ->get()
            ->take(2);

        $response['RecentPost'] = News::where('status', 'publicado')
            ->orderBy('updated_at', 'desc')
            ->get()
            ->take(4);

        $response['ads'] = Advertisement::orderByDesc('id')->take(1)->get();

        return view('site.category.tech.tech', $response);
    }
}
