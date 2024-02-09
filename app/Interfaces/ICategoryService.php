<?php

namespace App\Interfaces;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;

interface ICategoryService
{
    public function getCategory(string $slug): Collection;

    public function filterCategory(?string $category, ?string $tag): Builder;
}
