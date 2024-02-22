<?php

namespace App\View\Composers;

use App\Enums\CategoryType;
use App\Models\Category;
use App\Models\Plan;
use Illuminate\View\View;

class DashboardComposer
{
    public function compose(View $view): void
    {
        $view->with('plans', Plan::all());
        $view->with('categories', Category::all()->map(function (Category $category) {
            return ucfirst(strtolower(CategoryType::from($category->service)->name));
        }));
    }
}
