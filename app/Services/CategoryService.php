<?php

namespace App\Services;

use App\Interfaces\ICategoryService;
use App\Models\Advert;
use App\Models\CategoryLocale;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;

class CategoryService implements ICategoryService
{
    public function filterCategory(?string $category, ?string $tag): Builder
    {
        if (!$category) {
            return Advert::listing();
        }

        $current = $this->getCategory($category)->first();
        $adverts = Advert::listing()->whereHas('service', function (Builder $query) use ($current) {
            $query->where('serviceable_type', $current->service);
        });

        if ($tag) {
            $currentTag = $this->getCategory($tag)->first();
            $adverts->whereHas('tags', function (Builder $query) use ($currentTag) {
                $query->where('category_child_id', $currentTag->id);
            });
        }

        return $adverts;
    }

    public function getCategory(string $slug): Collection
    {
        $locale = CategoryLocale::where('slug', $slug);

        return $locale->first()->categorizable()->get();
    }
}
