<?php

namespace App\Services;

use App\Interfaces\ICategoryService;
use App\Models\Category;
use App\Models\CategoryLocale;

class CategoryService implements ICategoryService
{
    public function getCategory(string $slug): Category
    {
        $locale = CategoryLocale::where('slug', $slug)
            ->where('lang', app()->getLocale())
            ->whereHas('category', function ($query) use ($slug) {
                $query->whereNull('parent_id');
            })->with(['category'])->first();

        return Category::parents()->where('id', $locale->categories_id)->first();
    }
}
