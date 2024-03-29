<?php

namespace App\Interfaces;

use App\Enums\CategoryType;

interface IAdvertService
{
    public function loadCaterer(array &$data): void;

    public function submit(array $data, CategoryType $type): bool;

}
