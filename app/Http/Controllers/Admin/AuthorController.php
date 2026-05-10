<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Author;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthorController extends Controller
{
    public function index()
    {
        $response['authors'] = Author::orderByDesc('id')->get();

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


        return view('_admin.authors.author.index', $response);
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


        return view('_admin.authors.authorCreate.index', $response);
    }

    public function store(Request $request, Author $author)
    {
        // Validação dos campos
        $validated = $request->validate([
            'name'      => 'required|string|max:255',
            'biography' => 'nullable|string',
            'foto' => 'required|image|mimes:jpg,jpeg,png',
        ], [
            'name.required' => 'O nome do autor é obrigatório.',
            'foto.required' => 'A foto do autor é obrigatória.',
            'foto.image' => 'A foto deve ser uma imagem válida.',
            'foto.mimes' => 'A foto deve ser nos formatos: jpg, jpeg, png.',
        ]);

        // Upload da imagem
        $fotoName = null;
        if ($request->hasFile('foto') && $request->file('foto')->isValid()) {
            $foto = $request->file('foto');
            $extension = $foto->extension();
            $fotoName = md5($foto->getClientOriginalName() . strtotime('now')) . '.' . $extension;
            $foto->move(public_path('img/authors'), $fotoName);
            $validated['foto'] = $fotoName;
        }

        // Criação do autor
        $author = Author::create($validated);

        return redirect()->route('admin.author.index')->with('success', 'Autor criado com sucesso!');
        return redirect()->back()->with('error', 'Ocorreu um erro ao salvar Autor!');
    }
    public function show(Author $author)
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


        return view('_admin.authors.authorView.index', ['author' => $author], $response);
    }

    public function edit(Author $author)
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


        return view('_admin.authors.authorEdit.index', ['author' => $author], $response);
    }

    public function update(Request $request, Author $author)
    {
        // Validação
        $validated = $request->validate([
            'name'      => 'required|string|max:255',
            'biography' => 'nullable|string',
            'foto' => 'sometimes|image|mimes:jpg,jpeg,png', // Alterado para 'sometimes'
        ], [
            'name.required' => 'O nome do autor é obrigatório.',
            'foto.image' => 'A foto deve ser uma imagem válida.',
            'foto.mimes' => 'A foto deve ser nos formatos: jpg, jpeg, png.',
        ]);


        // Processar fotom se for enviada
        if ($request->hasFile('foto') && $request->file('foto')->isValid()) {
            // Remover fotom antiga se existir
            if ($author->foto && file_exists(public_path('img/authors/' . $author->foto))) {
                unlink(public_path('img/authors/' . $author->foto));
            }

            $foto = $request->file('foto');
            $extension = $foto->extension();
            $fotoName = md5($foto->getClientOriginalName() . strtotime('now')) . '.' . $extension;
            $foto->move(public_path('img/authors'), $fotoName);
            $validated['foto'] = $fotoName;
        }

        // Atualizar data de modificação
        $validated['lastModifyedDate'] = now()->format('Y-m-d');

        // Atualizar o author
        $author->update($validated);

        return redirect()->route('admin.author.index')->with('success', 'Autor atualizado com sucesso!');
        return redirect()->back()->with('error', 'Ocorreu um erro ao atualizar Autor!');
    }
    
    public function destroy(Author $author)
    {
        $author->delete();
        return redirect()->route('admin.author.index')->with('msg', 'author eliminado com sucesso!');
    }
}
