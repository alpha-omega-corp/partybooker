<?php

namespace App\Services;

use App\Interfaces\ICategoryService;
use App\Models\CategoryLocale;
use Illuminate\Database\Eloquent\Collection;

class CategoryService implements ICategoryService
{
    public function getCategory(string $slug): Collection
    {
        $locale = CategoryLocale::where('slug', $slug);

        return $locale->first()->categorizable()->get();
    }
}
