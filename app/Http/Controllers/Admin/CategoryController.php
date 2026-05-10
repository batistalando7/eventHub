<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $response['categories'] = Category::orderByDesc('id')->get();
        //$categories = Category::all();

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


        return view('_admin.categories.list.index', $response);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        /*  $typeCategories = typeCategory::where('name->name')->get(); */
        /* $response['typeCategories'] = TypeCategory::all(); */

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


        return view('_admin.categories.create.index', $response);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string|max:1000',
            /* 'typecategory_id' => 'required|exists:type_categories,id', */
        ], [
            'name.required' => 'O nome é obrigátorio.',
            'description.max' => 'O campo descrição não pode ter mais de 1000 caracteres.',
            /* 'typecategory_id.required' => 'O tipo de categoria é obrigatória.',
            'typecategory_id.exists' => 'O tipo de categoria selecionada é inválida.', */
        ]);
        Category::create([
            'name' => $request->name,
            'description' => $request->description,
            /* 'typecategory_id' => $request->typecategory_id, */
        ], [
            'name' => $request->name,
            'description' => $request->description,
        ]);

        return redirect()->route('admin.categories.index')->with('success', 'Categória criada com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
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


        return view('_admin.categories.details.index', ['category' => $category], $response);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        //
        /* $response['typeCategories'] = TypeCategory::all(); */
        $response['category'] = Category::all();

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


        return view('_admin.categories.edit.index', ['category'=> $category], $response);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        //
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string|max:1000',
            /* 'typecategory_id' => 'required|exists:type_categories,id', */
        ], [
            'name.required' => 'O nome é obrigátorio.',
            'description.max' => 'O campo descrição não pode ter mais de 1000 caracteres.',
            /* 'typecategory_id.required' => 'O tipo de categoria é obrigatória.',
            'typecategory_id.exists' => 'O tipo de categoria selecionada é inválida.', */
        ]);

        $category->update([
            'name' => $request->name,
            'description' => $request->description,
            /* 'typecategory_id' => $request->typecategory_id, */
        ], [
            'name' => $request->name,
            /* 'slug' => $request->slug, */
            'type' => $request->type,
            /* 'status' => $request->status === 'active' ? 'active' : 'inactive', */
            'description' => $request->description,
            'typecategory_id.required' => 'O tipo de categoria é obrigatória.',
            'typecategory_id.exists' => 'O tipo de categoria selecionada é inválida.',
        ]);

        return redirect()->route('admin.categories.index')->with('success', 'Categória atualizada com sucesso!');
        return redirect()->back()->with('error', 'Ocorreu um erro ao atualizar Categória!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        //
        $category = Category::findOrFail($category->id);

        // Verifica se a categoria está associada a algum artigo
        if (!$category) {
            return redirect()->back()->with('error', 'categoria não encontrada!');
        }


        // Exclui a categoria do banco de dados

        $category->delete();
        return redirect()->route('admin.categories.index')->with('success', 'Categoria apagado com sucesso!');
    }
}
