<?php

namespace App\Mails;

use App\Models\Partner;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Queue\SerializesModels;

class ServiceRequestGeneral extends Mailable
{
    use Queueable, SerializesModels;


    public function __construct(public Partner $partner, public array $data)
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
