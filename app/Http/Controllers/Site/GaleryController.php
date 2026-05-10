<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\News;
use App\Models\Advertisement;
use App\Models\Galery;

class GaleryController extends Controller
{
    public function galery()
    {
        $response['galeries'] = Galery::orderByDesc('id')->paginate(12);

        $response['breaknews'] = News::where('status', 'publicado')
            ->where('detach', 'destaque')
            ->orderByDesc('id')
            ->get()
            ->take(3);

        $response['subscription'] = News::where('status', 'publicado')
            ->where('detach', 'destaque')
            ->orderByDesc('id')
            ->first();

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
            ->get()->take(4);

        $response['ads'] = Advertisement::orderByDesc('id')->take(1)->get();

        return view('site.multimedia.galery', $response);
    }
}
