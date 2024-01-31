<?php

namespace App\Interfaces;

use Illuminate\Database\Eloquent\Collection;

interface ICategoryService
{
    public function getCategory(string $slug): Collection;
}
