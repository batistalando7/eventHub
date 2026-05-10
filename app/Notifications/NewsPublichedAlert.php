<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use App\Models\News;

class NewsPublichedAlert extends Notification
{
    use Queueable;

    protected $author;
    protected $news;

    public function __construct(News $news)
    {
        $this->author = auth()->user()->name;
        $this->news = $news;
    }

    // Canal de entrega: Banco de dados
    public function via($notifiable)
    {
        return ['database'];
    }

    // Dados salvos no banco
    public function toDatabase($notifiable)
    {
        return [
            'id' => $this->news->id,
            'title' => $this->news->title,
            'user_id' => $this->news->user_id ?? 'Desconhecido',
            'message' => "O '<b>{$this->author}</b>' publicou a notícia '<b>{$this->news->title}</b>'.",
        ];
    }
}