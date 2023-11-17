<?php

namespace App\Interfaces;

interface ILocaleService
{
    public function addressValues(string $address): array;
}
