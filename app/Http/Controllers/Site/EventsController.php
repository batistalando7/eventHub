<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;

class EventsController extends Controller
{
    public function index(){
        $events = News::where('status', 'publicado')->orderByDesc('id')->get();

        return view('site.event.index', compact('events'));
    }
}
