<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Galery;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GaleryController extends Controller
{
    public function index()
    {
        $response['galeries'] = Galery::orderByDesc('id')->get();

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


        return view('_admin.galeries.list.index', $response);
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


        return view('_admin.galeries.create.index', $response);
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image.*' => 'required|image|mimes:jpg,jpeg,png,gif|max:2048',
        ], [
            'title.required' => 'O título é obrigatório.',
            'image.*.required' => 'A imagem é obrigatória.',
            'image.*.image' => 'O arquivo deve ser uma imagem válida.',
            'image.*.max' => 'Cada imagem não pode ser maior que 2MB.',
        ]);

        $imageNames = [];

        if ($request->hasFile('image')) {
            foreach ($request->file('image') as $image) {
                $fileName = time() . '_' . uniqid() . '_' . $image->getClientOriginalName();
                $image->move(public_path('img/galeries'), $fileName);

                $imageNames[] = $fileName;
            }
        }

        Galery::create([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'images' => $imageNames, // agora é array
        ]);

        return redirect()->route('admin.galery.index')
            ->with('success', 'Galeria criada com sucesso.');
    }


    public function show(Galery $galery)
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


        return view('_admin.galeries.details.index', ['galery' => $galery], $response);
    }

    public function edit(Galery $galery)
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


        return view('_admin.galeries.edit.index', ['galery' => $galery], $response);
    }

    public function update(Request $request, Galery $galery)
    {
        $request->validate([
            'title'        => 'required|string|max:255',
            'description'  => 'nullable|string',
            'image.*'      => 'sometimes|image|mimes:jpg,jpeg,png,gif|max:2048',
        ], [
            'title.required' => 'O título é obrigatório.',
            'image.*.image'  => 'Cada arquivo deve ser uma imagem válida.',
            'image.*.mimes'  => 'As imagens devem ser nos formatos: jpg, jpeg, png, gif.',
            'image.*.max'    => 'Cada imagem não pode ser maior que 2MB.',
        ]);

    // Começa com as imagens já existentes
        $currentImages = $galery->images ?? [];

    // Verifica se novas imagens foram enviadas
        if ($request->hasFile('image')) {

            foreach ($request->file('image') as $img) {

                $fileName = time() . '_' . uniqid() . '_' . $img->getClientOriginalName();
                $img->move(public_path('img/galeries'), $fileName);

                $currentImages[] = $fileName; // adiciona ao array existente
            }
        }

    // Atualiza os dados
        $galery->update([
            'title'            => $request->title,
            'description'      => $request->description,
            'images'           => $currentImages,  // recebe todas imagens (antigas + novas)
            'lastModifyedDate' => now()->format('Y-m-d'),
        ]);

        return redirect()
            ->route('admin.galery.index')
            ->with('success', 'Galeria atualizada com sucesso!');
    }


    public function destroy(Galery $galery)
    {
        $galery->delete();
        return redirect()->route('admin.galery.index')->with('success', 'Galeria removida com sucesso.');
    }
}
