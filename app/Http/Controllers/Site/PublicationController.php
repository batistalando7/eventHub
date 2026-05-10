<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\News;
use App\Models\Advertisement;
use App\Models\Publication;

class PublicationController extends Controller
{
    public function publication()
    {

        $response['publications'] = Publication::orderBy('updated_at', 'desc')->paginate(12);

        $response['breaknews'] = News::where('detach', 'destaque')->orderByDesc('id')->get()->take(3);

        $response['subscription'] = News::where('detach', 'destaque')->orderByDesc('id')->first();

        $response['footerCategory'] = Category::select('name')
            ->distinct()
            ->get()
            ->take(5);

        $response['Recent'] = News::orderBy('updated_at', 'desc')->get()->take(2);

        $response['RecentPost'] = News::orderBy('updated_at', 'desc')->get()->take(4);

        $response['ads'] = Advertisement::orderByDesc('id')->take(1)->get();

        return view('site.multimedia.publication', $response);
    }
}
