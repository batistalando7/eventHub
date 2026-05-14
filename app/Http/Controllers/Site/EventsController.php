<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\News;
use App\Models\UsersEvent;
use Illuminate\Http\Request;

class EventsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->only(['participate']);
    }

    public function index(){
        $events = News::where('status', 'publicado')->orderByDesc('id')->get();

        return view('site.event.index', compact('events'));
    }
    
    public function show($id){
        $event = News::findOrFail($id);

        return view('site.event.show', compact('event'));
    }
    
    public function participate($id){

        $event = News::findOrFail($id);

        $authUSerId = auth()->id();
    
        $users = UsersEvent::where('user_id', $authUSerId)->where('event_id', $id)->exists();
        if ($users) {
            return redirect()->route('site.events.details', $id)->with('error', 'Você já está inscrito neste evento!');
        }

        // associar o usuário ao evento
        $userEvent = UsersEvent::create([
            'user_id' => auth()->id(),
            'event_id' => $id,
        ]);

        return redirect()->route('site.events.details', $id)->with('success', 'Você se inscreveu com sucesso no evento!');
    }
}
