<?php

namespace App\Mails;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Queue\SerializesModels;

class Password extends Mailable
{
    use Queueable, SerializesModels;


    public function __construct(
        protected string $token,
    )
    {
        //
    }

    public function content(): Content
    {
        return new Content(
            view: 'email.password',
            with: [
                'token' => $this->token,
            ],
        );
    }
}
