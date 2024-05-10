<?php

namespace App\Mails;

use App\Models\Advert;
use App\Models\Notification;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Queue\SerializesModels;

class Service extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(
        public Advert       $advert,
        public Notification $notification)
    {
    }

    public function content(): Content
    {
        return new Content(
            view: 'email.service',
            with: [
                'advert' => $this->advert,
                'notification' => $this->notification,
            ],
        );
    }
}
