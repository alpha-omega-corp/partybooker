<?php

namespace App\Listeners;

use App\Services\LocaleService;
use Laravel\Cashier\Events\WebhookReceived;
use Log;

class StripeEventListener
{
    private LocaleService $localeService;

    public function __construct()
    {
        $this->localeService = new LocaleService();
    }

    public function handle(WebhookReceived $event): void
    {
        $i = $this->localeService->addressValues('Rathausgasse 64, 3011 Bern, Switzerland');
        Log::debug('info', $i);
    }
}
