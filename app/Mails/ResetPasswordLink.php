<?php

namespace App\Mails;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Queue\SerializesModels;

class ResetPasswordLink extends Mailable
{
    use Queueable, SerializesModels;


    public function __construct(
        protected string $token,
    )
    {
    }


    public function content(): Content
    {
        return new Content(
            view: 'email.reset-password',
            with: [
                'token' => $this->token,
            ],
        );
    }
}
