<?php

namespace App\Interfaces;

interface IAdvertService
{
    public function canPublishMatrix(string $partnerUid);

    public function canPublish(string $partnerUid);
}
