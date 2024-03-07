<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateCategoryRequest;
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

    public function updateTag(CategoryTag $tag, UpdateCategoryRequest $request)
    {
        $this->categoryService->updateCategory($request, $tag);
        return back()->with('success', 'Category tag updated');
    }

    public function updateCategory(Category $category, UpdateCategoryRequest $request): RedirectResponse
    {
        $this->categoryService->updateCategory($request, $category);
        return back()->with('success', 'Category updated');
    }

}
