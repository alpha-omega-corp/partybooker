<?php

namespace App\Listeners;

use Laravel\Cashier\Events\WebhookReceived;
use Log;

class StripeEventListener
{

    public function handle(WebhookReceived $event): void
    {
        if ($event->payload['type'] === 'invoice.payment_succeeded') {
            Log::log('info', 'Payment succeeded', $event->payload);
        }

    }
}
