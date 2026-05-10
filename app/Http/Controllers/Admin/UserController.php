<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $response['users'] = User::all();

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


        return view('_admin.users.list.index', $response);
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


        return view('_admin.users.create.index', $response);
    }

    public function store(Request $request)
    {
        //Validação do dados
        $dados = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],
            'role' => ['required', 'in:assinante,editor,jornalista,admin'],
            'image' => ['nullable', 'image', 'mimes:jpg,jpeg,png'],

        ], [
            'name.required' => 'Nome obrigatório.',
            'email.required' => 'E-mail obrigatório.',
            'email.unique:users' => 'E-mail já esxistente.',
            'password.required' => 'Password obrigatório.',
            'role.required' => 'Nivel de acesso obrigatório.',
            'image.image' => 'Precisa ser uma imagem válida',
            'image.mimes' => 'Imagem válida é nos seguintes formatos: jpg, jpeg, png.',
        ]);

        //processando a imagem
        $imageName = null;
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $image = $request->file('image');
            $extension = $image->extension();
            $imageName = md5($image->getClientOriginalName() . strtotime('now')) . '.' . $extension;
            $image->move(public_path('img/users'), $imageName);
            $dados['image'] = $imageName;
        }

        $senha = Hash::make($request->password);
        $dados['password'] = $senha;
        //criando um novo user
        $user = User::create($dados);
        if ($user) {
            return redirect()->route('admin.user.index')->with('Success', ' Utilizador cadastrado com sucesso! ');
        } else {
            return redirect()->back()->with('Error', 'Erro ao cadastrar utilizador');
        }
    }

    public function show(User $user)
    {
        $response['user'] = $user;

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
        }); // todas
        $response['unreadNotifications'] = $response['admin']->unreadNotifications; // não lidas
        $response['unreadCount'] = auth()->user()->unreadNotifications->count();


        return view('_admin.users.details.index', $response);
    }

    public function edit(User $user)
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


        return view('_admin.users.edit.index', ['user' => $user], $response);
    }

    public function update(Request $request, User $user)
    {
        //validação dos dados
        $dados = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'password' => ['required', 'string', 'min:8'],
            'role' => ['nullable', 'in:assinante,editor,jornalista,admin'],
            'image' => ['nullable', 'image', 'mimes:jpg,jpeg,png']
        ], [
            'name.required' => 'Nome obrigatório',
            'email.required' => 'E-mail obrigatório.',
            'email.unique:users' => 'E-mail já esxistente.',
            'password.required' => 'Password obrigatório.',
            /* 'role.required' => 'Nivel de acesso obrigatório.', */
            'image.image' => 'Precisa ser uma imagem válida',
            'image.mimes' => 'Imagem válida é nos seguintes formatos: jpg, jpeg, png.'
        ]);
        //tratamento da imagem
        $imageName = null;
        if($request->hasFile('image') && $request->file('image')){
            //verificar se existe uma imagem e apagar o registro
            if ($user->image && file_exists(public_path('img/users/' . $user->image))) {
                unlink(public_path('img/users/' . $user->image));
            }
            $image = $request->file('image');
            $extension = $image->extension();
            $imageName = md5($image->getClientoriginalName() . strtotime('now') . '.' . $extension );
            $image->move(public_path('img/users'), $imageName );
            $dados['image'] = $imageName;

        }
        $user->update($dados);
        if($user){
            return redirect()->route('admin.user.show', ['user' => $user])->with('Success', 'Utilizador editado com sucesso!');
        }else{
            return redirect()->back()->with('Error', 'Erro ao editar utilizador!');
        }
    }
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('admin.user.index')->with(' Success ', ' Utilizador Deletado com sucesso! ');
    }
}
