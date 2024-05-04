<?php

namespace App\View\Composers;

use App\Enums\CategoryType;
use App\Models\AppPlan;
use App\Models\Category;
use Illuminate\View\View;

class AppComposer
{

    public function compose(View $view): void
    {
        $view->with('plans', AppPlan::all());
        $view->with('categories', $this->getCategories());
    }

    private function getCategories(): array
    {
        $categories = [];
        Category::all()->each(function (Category $category) use (&$categories) {
            $categories[$category->id] = ucfirst(strtolower(CategoryType::from($category->service)->name));
        });

        return $categories;
    }
}
