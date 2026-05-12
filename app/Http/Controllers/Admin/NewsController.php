<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Notifications\NewsArchivedAlert;
use App\Notifications\NewsPublichedAlert;
use App\Notifications\NewsDraftAlert;
use Illuminate\Http\Request;
use App\Models\News;
use App\Models\Tag;
use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use App\Models\Subscription;
use App\Mail\HighlightNewsNotificationMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Notification;
use App\Models\ActivityLog;

class NewsController extends Controller
{
    public function index()
    {
        $response['news'] = News::orderByDesc('id')->get();

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


        return view('_admin.news.list.published.index', $response);
    }

    public function create()
    {
        //trazendo as categorias
        $response['categories'] = Category::all();
        $response['tags'] = Tag::all();
        $response['users'] = User::all(); // ou request()->user();

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


        return view('_admin.news.create.index', $response);
    }

    public function store(Request $request)
    {
        $request->validate([
            'author' => 'nullable|string|max:255',
            'title' => 'required|string|max:255',
            'subtitle' => 'required|string|max:10000',
            'status' => 'nullable|in:publicado,arquivado',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5120',
            'date' => 'required|date|after_or_equal:today',
            'detach' => 'nullable|in:normal,destaque',
            'category_id' => 'required|exists:categories,id',
            'tags' => 'array',
            'tags.*' => 'exists:tags,id',
            'address' => 'required|string|max:255'
        ]);
        
        $data = $request->all();

        // Upload da imagem
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $image = $request->file('image');
            $imageName = md5($image->getClientOriginalName() . strtotime('now'));
            $path = $image->storeAs('events/img', $imageName, 'public');
            $data['image'] = $path;
        }

        $news = News::create([
            'author' => Auth::user()->id,
            'title' => $data['title'],
            'subtitle' => $data['subtitle'],
            'status' => $data['status'],
            'description' => $data['description'],
            'image' => $data['image'],
            'date' => $data['date'],
            'detach' => $data['detach'],
            'category_id' => $data['category_id'],
            'address' => $data['address']
        ]);

        /* // Tags
        $news->tags()->sync($request->tags ?? []); */

        // Se for arquivada, notificar(alert) administradores
        if ($news->status === 'arquivado') {

            /* Se for arquivada envia um alert no admin e editor */
            Notification::send(User::whereIn('role', ['admin', 'editor'])->get(),
            new NewsArchivedAlert($news)
            );
        } else if($news->status === 'rascunho') {
            /* Se estiver em rascunho envia alert o editor e o admin */
            Notification::send(user::whereIn('role', ['admin', 'editor'])->get(),
            new NewsDraftAlert($news)
            );
        }else if($news->status === 'publicado') {

            // Se for aprovado/publicado, notificar administradores e jornalistas
            Notification::send(User::whereIn('role', ['admin', 'editor', 'jornalista'])->get(),
            new NewsPublichedAlert($news)
            );
        }

        // Enviar notificação por email se for destaque e publicado
        if ($news->status === 'publicado' && $news->detach === 'destaque') {
            $subscribers = Subscription::all();
            foreach ($subscribers as $subscriber) {
                try {
                    //code...
                    Mail::to($subscriber->email)->queue(new HighlightNewsNotificationMail($news));
                } catch (\Exception $e) {
                    //throw $th;
                    Log::error('Erro ao enviar email' . $e->getMessage());
                }
            }
        }

        return redirect()->route('admin.news.index')->with('success', 'Notícia criada com sucesso!');
    }


    public function show(News $news)
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


        return view('_admin.news.details.index', ['news' => $news], $response);
    }

    public function edit(News $news)
    {
        $response['categories'] = Category::all(); // Or any other query to fetch categories
        $response['tags'] = Tag::all();
        $response['users'] = User::all(); // ou request()->user();

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


        return view('_admin.news.edit.index', ['news' => $news], $response);
    }

    public function update(Request $request, News $news)
    {
        $request->validate([
            'font' => 'nullable|string',
            'title' => 'required|string|max:255',
            'subtitle' => 'required|string|max:10000',
            'status' => 'nullable|in:rascunho,publicado,arquivado',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            /* 'date' => 'required|date|after_or_equal:today', */
            'detach' => 'nullable|in:normal,destaque,premium',
            'category_id' => 'required|exists:categories,id',
            'tags' => 'array',
            'tags.*' => 'exists:tags,id'
        ], [
            'title.required' => 'O título é obrigatório.',
            'subtitle.required' => 'O subtítulo é obrigatório.',
            'status.required' => 'Obrigatório selecionar um status.',
            'description.max' => 'O campo descrição não pode ter mais de 1000 caracteres.',
            'image.image' => 'O arquivo deve ser uma imagem.',
            'image.mimes' => 'A imagem deve ser do tipo: jpeg, png, jpg ou gif.',
            'image.max' => 'A imagem não pode ter mais de 2MB.',
            /* 'date.required' => 'A data é obrigatória.',
            'date.date' => 'Informe uma data válida.',
            'date.after_or_equal' => 'A data não pode ser anterior à data atual.', */
            'detach.required' => 'O campo destaque é obrigatório.',
            'detach.in' => 'O valor do destaque é inválido.',
            'category_id.required' => 'A categoria é obrigatória.',
            'category_id.exists' => 'A categoria selecionada é inválida.',
        ]);

        $data = $request->except('_token', '_method', 'image');

        // Atualiza o slug baseado no título se necessário
        if ($request->has('title') && $request->title !== $news->title) {
            $data['slug'] = Str::slug($request->title);
        }

        // Processar imagem se for enviada
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            // Remover imagem antiga se existir
            if ($news->image && file_exists(public_path('img/news/' . $news->image))) {
                unlink(public_path('img/news/' . $news->image));
            }

            $image = $request->file('image');
            $extension = $image->extension();
            $imageName = md5($image->getClientOriginalName() . strtotime('now')) . '.' . $extension;
            $image->move('img/news', $imageName);
            $data['image'] = $imageName;
        }

        // Atualiza todos os campos
        $news->update($data);

        // Se for arquivada, notificar(alert) administradores
        if ($news->status === 'arquivado') {

            /* Se for arquivada envia um alert no admin e editor */
            Notification::send(User::whereIn('role', ['admin', 'editor'])->get(),
            new NewsArchivedAlert($news)
            );
        } else if($news->status === 'rascunho') {
            /* Se estiver em rascunho envia alert o editor e o admin */
            Notification::send(User::whereIn('role', ['admin', 'editor'])->get(),
            new NewsDraftAlert($news)
            );
        }else if($news->status === 'publicado') {

            // Se for aprovado/publicado, notificar administradores e jornalistas
            Notification::send(User::whereIn('role', ['admin', 'editor', 'jornalista'])->get(),
            new NewsPublichedAlert($news)
            );
        }

        // Tags
        if ($request->has('tags')) {
            $news->tags()->sync($request->tags);
        } else {
            $news->tags()->sync([]);
        }

        //  Enviar notificação se agora for destaque e publicado
        if ($news->status === 'publicado' && $news->detach === 'destaque') {
            $subscribers = Subscription::all();
            foreach ($subscribers as $subscriber) {
                try {
                    //code...
                    Mail::to($subscriber->email)->queue(new HighlightNewsNotificationMail($news));
                } catch (\Exception $e) {
                    //throw $th;
                    Log::error('Erro ao enviar email' . $e->getMessage());
                }
            }
        }

        return redirect()->route('admin.news.index')->with('success', 'Notícia atualizada com sucesso!');
    }


    public function destroy(News $news)
    {
        $user = Auth::user(); // ou request()->user();

        if (!$user->isEditor()) {
            abort(403, 'Você não tem permissão para deletar esta notícia.');
        }
        $news->delete();

        /* Criando os logging - Registrando as atividades do site */
        ActivityLog::create([
            'user_id' => Auth::id(),
            'route' => request()->path(),
            'action' => 'DELETE',
            'description' => 'Eliminou a notícia: ' . $news->title,
            'ip_address' => request()->ip(),
        ]);

        return redirect()->route('admin.news.index')
            ->with('success', 'Notícia eliminado com sucesso');
    }

    public function arquivadas(Request $request)
    {
        // Busca notícias com status 'arquivado' ordenadas por id desc e paginadas
        $response['archivedNews'] = News::where('status', 'arquivado')->latest()->paginate(10); // ajusta o número por página se quiseres

        // Mantém filtros/queries (opcional)
        if ($request->wantsJson()) {
            return response()->json($response['archivedNews']);
        }

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


        return view('_admin.news.list.archived.index', $response);
    }

    public function rascunho(Request $request)
    {
        // Busca notícias com status 'rascunho' ordenadas por id desc e paginadas
        $response['draftNews'] = News::where('status', 'rascunho')->latest()->paginate(10,); // ajusta o número por página se quiseres

        // Mantém filtros/queries (opcional)
        if ($request->wantsJson()) {
            return response()->json($response['draftNews']);
        }

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


        return view('_admin.news.list.draft.index', $response);
    }

    public function uploadImage(Request $request)
{
    if ($request->hasFile('upload')) {
        $file = $request->file('upload');

        // Nome único para o arquivo
        $filename = time() . '_' . $file->getClientOriginalName();

        // Diretório onde será salvo
        $file->move(public_path('img/news/'), $filename);

        // URL pública da imagem
        $url = asset('img/news/' . $filename);

        // Retorna a resposta no formato esperado pelo CKEditor
        return response()->json([
            'url' => $url
        ]);
    }

    return response()->json(['error' => 'Nenhum arquivo enviado.'], 400);
}


}
