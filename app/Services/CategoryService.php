<?php

namespace App\Services;

use App\Enums\Language;
use App\Http\Requests\CategoryTagRequest;
use App\Interfaces\ICategoryService;
use App\Models\Advert;
use App\Models\Category;
use App\Models\CategoryLocale;
use App\Models\CategoryTag;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;

class  CategoryService implements ICategoryService
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

        return $adverts->get()->sortBy(function (Advert $advert) {
            return $advert->company->partner->payment->plan->code;
        })->reverse();
    }

    public function getCategory(string $slug): Collection
    {
        $locale = CategoryLocale::where('slug', $slug);

        return $locale->first()->translatable()->get();
    }

    public function createCategoryTag(CategoryTagRequest $request, Category $category): bool
    {
        $data = $request->validated();

        $tag = CategoryTag::create([
            'category_id' => $category->id,
        ]);

        CategoryLocale::create([
            'translatable_id' => $tag->id,
            'translatable_type' => CategoryTag::class,
            'lang' => Language::FR,
            'slug' => $data['slug_fr'],
            'title' => $data['title_fr'],
            'description' => $data['description_fr'],
            'keywords' => array_key_exists('keywords_fr', $data) ? $data['keywords_fr'] : null,
        ]);

        CategoryLocale::create([
            'translatable_id' => $tag->id,
            'translatable_type' => CategoryTag::class,
            'lang' => Language::EN,
            'slug' => $data['slug_en'],
            'title' => $data['title_en'],
            'description' => $data['description_en'],
            'keywords' => array_key_exists('keywords_en', $data) ? $data['keywords_en'] : null,
        ]);


        return true;
    }

    public function updateCategory(CategoryTagRequest $request, Category|CategoryTag $item): bool
    {
        $data = $request->validated();

        $item->ofLang(Language::FR)->first()->locale->update([
            'slug' => $data['slug_fr'],
            'title' => $data['title_fr'],
            'description' => $data['description_fr'],
            'keywords' => $data['keywords_fr'],
        ]);

        $item->ofLang(Language::EN)->first()->locale->update([
            'slug' => $data['slug_en'],
            'title' => $data['title_en'],
            'description' => $data['description_en'],
            'keywords' => $data['keywords_en'],
        ]);

        return true;
    }
}
