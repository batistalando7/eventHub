<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Advertisement;
use App\Models\Comment;
use App\Models\Category;
use App\Models\News;
use App\Models\User;
use App\Models\Tag;
use App\Models\Finalist;
use App\Models\School;
use App\Models\Subscription;

class NewsController extends Controller
{
    public function newsView(News $news)
    {
        // Carregar a notícia e suas relações (categoria, comentários e subscriptions)
        $response['news'] = $news->load([
            'category',
            'comments.subscription',
            'comments.replies.subscription'
        ]);

        $response['news'] = $news;

        //  Busca notícias relacionadas pela mesma categoria
        $response['Related'] = News::where('status', 'publicado')
            ->where('category_id', $news->category_id)
            ->where('id', '!=', $news->id) // Exclui a própria notícia
            ->latest()
            ->take(6)
            ->get();

        $response['users'] = User::all();
        $response['comments'] = Comment::all();

        /*  Últimas notícias (3 últimas em destaque) */
        $response['breaknews'] = News::where('status', 'publicado')
            ->where('detach', 'destaque')
            ->orderByDesc('id')
            ->take(3)
            ->get();

        /*  Subscrição - notícia mais recente em destaque */
        $response['subscription'] = News::where('status', 'publicado')
            ->where('detach', 'destaque')
            ->orderByDesc('id')
            ->first();

        /*  Tags (etiquetas) mais recentes */
        $response['tags'] = Tag::select('name')
            ->distinct()
            ->take(6)
            ->get();

        $response['tags1'] = Tag::select('name')
            ->distinct()
            ->take(3)
            ->get();


        /*  Footer - primeiras 5 categorias e últimas 2 notícias */
        $response['footerCategory'] = Category::select('name')
            ->distinct()
            ->take(5)
            ->get();

        $response['Recent'] = News::where('status', 'publicado')
            ->orderBy('updated_at', 'desc')
            ->take(2)
            ->get();

        $response['RecentPost'] = News::where('status', 'publicado')
            ->orderBy('updated_at', 'desc')
            ->take(4)
            ->get();

        $response['categories'] = Category::all();
        $response['ads'] = Advertisement::orderByDesc('id')->take(1)->get();

        return view('site.category.news.newsView', $response);
    }


     // Função de busca
    public function search(Request $request)
    {
        $query = $request->input('q');

         // Variáveis globais usadas no layout (header, footer, etc.)

         $response['categories'] = Category::select('id', 'name')->get();

        $response['breaknews'] = News::where('status', 'publicado')
            ->where('detach', 'destaque')
            ->orderByDesc('id')
            ->take(3)
            ->get();

        $response['subscription'] = News::where('status', 'publicado')
            ->where('detach', 'destaque')
            ->orderByDesc('id')
            ->first();

        $response['footerCategory'] = Category::select('name')
            ->distinct()
            ->take(5)
            ->get();

        $response['Recent'] = News::where('status', 'publicado')
            ->orderBy('updated_at', 'desc')
            ->take(2)
            ->get();

        $response['RecentPost'] = News::where('status', 'publicado')
            ->orderBy('updated_at', 'desc')
            ->take(4)
            ->get();

        $response['ads'] = Advertisement::orderByDesc('id')->take(1)->get();

        /* Filtyro de pesquisa */

        //  pesquisa por notícias

        $response['news'] = News::with(['category.typeCategory', 'tags'])
            ->where('status', 'publicado')
            ->where(function ($q1) use ($query) {
                $q1->where('title', 'like', "%{$query}%")
                    ->orWhereHas('category', function ($q2) use ($query) {
                        $q2->where('name', 'like', "%{$query}%");
                    })
                    ->orWhereHas('category.typeCategory', function ($q3) use ($query) {
                        $q3->where('name', 'like', "%{$query}%");
                    })
                    ->orWhereHas('tags', function ($q4) use ($query) {
                        $q4->where('name', 'like', "%{$query}%");
                    });
            })
            ->orderByDesc('id')
            ->paginate(5);


        return view('site.search-results.search', $response, compact('query')); // finalists vazio;
    }


}
