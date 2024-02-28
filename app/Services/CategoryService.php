<?php

namespace App\Services;

use App\Interfaces\ICategoryService;
use App\Models\Advert;
use App\Models\CategoryLocale;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;

class CategoryService implements ICategoryService
{
    public function filterCategory(?string $requestCat, ?string $requestTag): Builder
    {
        if (!$requestCat) {
            return Advert::listing();
        }

        $category = $this->getCategory($requestCat)->first();
        $adverts = Advert::listing()->whereHas('service', function (Builder $query) use ($category) {
            $query->where('serviceable_type', $category->service);
        });

        if ($requestTag) {
            $tag = $this->getCategory($requestTag)->first();
            $adverts->whereHas('tags', function (Builder $query) use ($tag) {
                $query->where('category_tag_id', $tag->id);
            });
        }

        return $adverts;
    }

    public function getCategory(string $slug): Collection
    {
        $locale = CategoryLocale::where('slug', $slug);

        return $locale->first()->translatable()->get();
    }
}
