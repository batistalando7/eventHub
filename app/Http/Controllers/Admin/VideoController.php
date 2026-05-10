<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Video;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VideoController extends Controller
{
    public function index()
    {
        $response['videos'] = Video::orderByDesc('id')->get();

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


        return view('_admin.videos.list.index', $response);
    }

    public function create()
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


        return view('_admin.videos.create.index', $response);
    }

    public function store(Request $request)
    {
        //validation
        $request->validate([
            'title' => 'required|string|max:1000',
            'detach' => 'required|string|max:1000',
            'description' => 'nullable|string|max:1000',
            'url' => 'required|url',
        ], [
            'title.required' => 'O título é obrigátorio.',
            'detach.required' => 'O campo "detach" é obrigátorio.',
            'url.required' => 'A URL é obrigátorio.',
            'url.url' => 'A URL deve ser um link válido.',
            'description.max' => 'O campo descrição não pode ter mais de 1000 caracteres.',
        ]);
        Video::create($request->only('title', 'detach', 'description', 'url'));
        return redirect()->route('admin.video.index')->with('success', 'Vídeo criado com sucesso.');
    }

    public function show(Video $video)
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


        return view('_admin.videos.details.index', ['video' => $video], $response);
    }

    public function edit(Video $video)
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


        return view('_admin.videos.edit.index', ['video' => $video], $response);
    }
    
    public function update(Request $request, Video $video)
    {
        //
        $request->validate([
            'title' => 'required|string|max:1000',
            'detach' => 'required|string|max:1000',
            'description' => 'nullable|string|max:1000',
            'url' => 'required|url',
        ], [
            'title.required' => 'O título é obrigátorio.',
            'detach.required' => 'O campo "detach" é obrigátorio.',
            'url.required' => 'A URL é obrigátorio.',
            'url.url' => 'A URL deve ser um link válido.',
            'description.max' => 'O campo descrição não pode ter mais de 1000 caracteres.',
        ]);
        $video->update($request->only('title', 'detach', 'description', 'url'));
        return redirect()->route('admin.video.index')->with('success', 'Vídeo atualizado com sucesso.');
    }
    public function destroy(Video $video)
    {
        $video->delete();
        return redirect()->route('admin.video.index')->with('success', 'Vídeo deletado com sucesso.');
    }
}
