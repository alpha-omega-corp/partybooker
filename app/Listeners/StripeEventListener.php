<?php

namespace App\Listeners;

use Laravel\Cashier\Events\WebhookReceived;
use Log;

class StripeEventListener
{

    public function __construct()
    {
    }

    public function handle(WebhookReceived $event): void
    {
        Log::debug('info', $event->payload);
    }
}
