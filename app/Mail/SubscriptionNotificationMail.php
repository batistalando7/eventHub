<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SubscriptionNotificationMail extends Mailable
{
    use Queueable, SerializesModels;

    /* define a classe do email. */
    public $subscriberEmail;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    /* O construtor recebe como parâmetro o email do subscritor. */
    public function __construct($subscriberEmail)
    {
        $this->subscriberEmail = $subscriberEmail;
    }

    /**
     * Build the message.
     *
     * @return $this
     */

    /* O método build() monta o email final. */
    public function build()
    {
        return $this->subject('Confirmação de Subscrição - Assessorarte')
                    ->view('emails.subscription-notification');
    }
}
