<?php

namespace App\Interfaces;

use App\Models\PartnersInfo;

interface IRequestService
{
    public function updateCount(string $partnerId): void;

    public function sendRequest(PartnersInfo $partner, array $formData, string $type): void;


}
