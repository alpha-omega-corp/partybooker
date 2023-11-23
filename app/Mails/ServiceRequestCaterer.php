<?php

namespace App\Mails;

use App\Models\PartnersInfo;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Queue\SerializesModels;

class ServiceRequestCaterer extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(public PartnersInfo $partner, public array $data)
    {
    }


    public function content(): Content
    {
        return new Content(
            view: 'email.service-request.caterer',
            with: [
                'partner' => $this->partner,
                'data' => $this->data,
            ],
        );
    }
}
