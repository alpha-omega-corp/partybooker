<?php

namespace App\Mails;

use App\Models\PartnersInfo;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Queue\SerializesModels;

class ServiceRequestGeneral extends Mailable
{
    use Queueable, SerializesModels;


    public function __construct(public PartnersInfo $partner, public array $data)
    {
    }

    public function content(): Content
    {
        return new Content(
            view: 'email.service-request.general',
            with: [
                'partner' => $this->partner,
                'data' => $this->data,
            ],
        );
    }
}
