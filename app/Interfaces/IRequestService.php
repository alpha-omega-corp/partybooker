<?php

namespace App\Interfaces;

use App\Models\Partner;

interface IRequestService
{
    public function updateCount(string $partnerId): void;

    public function sendRequest(Partner $partner, array $formData, string $type): void;


}
