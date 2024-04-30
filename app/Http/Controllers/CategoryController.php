<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryTagRequest;
use App\Interfaces\ICategoryService;
use App\Models\Category;
use App\Models\CategoryTag;
use App\Services\CategoryService;
use Illuminate\Http\RedirectResponse;

class CategoryController extends Controller
{
    private ICategoryService $categoryService;

    public function __construct(CategoryService $categoryService)
    {
        $this->categoryService = $categoryService;
    }

    public function destroyTag(CategoryTag $tag)
    {
        $tag->locales()->delete();
        $tag->delete();

        return back()->with('success', 'Category tag deleted');
    }

    public function storeTag(Category $category, CategoryTagRequest $request)
    {
        $this->categoryService->createCategoryTag($request, $category);
        return back()->with('success', 'Category tag created');
    }

    public function updateTag(CategoryTag $tag, CategoryTagRequest $request)
    {
        $this->categoryService->updateCategory($request, $tag);
        return back()->with('success', 'Category tag updated');
    }

    public function updateCategory(Category $category, CategoryTagRequest $request): RedirectResponse
    {
        $this->categoryService->updateCategory($request, $category);
        return back()->with('success', 'Category updated');
    }

}
