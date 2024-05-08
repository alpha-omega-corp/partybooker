<?php

namespace App\Interfaces;

use App\Http\Requests\CategoryTagRequest;
use App\Models\Category;
use App\Models\CategoryTag;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;

interface ICategoryService
{
    public function getFromSlug(string $slug): Category;

    public function getCategory(string $slug): Collection;

    public function filterCategory(?string $requestCat, ?string $requestTag): Builder;

    public function createCategoryTag(CategoryTagRequest $request, Category $category): bool;

    public function updateCategory(CategoryTagRequest $request, Category|CategoryTag $item): bool;


}
