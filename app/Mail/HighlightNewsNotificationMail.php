<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class HighlightNewsNotificationMail extends Mailable
{
    use Queueable, SerializesModels;

    /* define a class de notícia */
    public $news;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    /* o construtor recebe como parametro a notícia */
    public function __construct($news)
    {
        $this->news = $news;
    }

    /**
     * Build the message.
     *
     * @return $this
     */

    /* o build() monta a notícia final */
    public function build()
    {
        return $this->subject('Nova notícia em destaque - ' . $this->news->title)
                    ->view('emails.highlight-news');
    }
}
