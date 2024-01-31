<?php

namespace App\Http\Controllers;

use App\Interfaces\ICategoryService;
use App\Models\Advert;
use App\Models\Category;
use App\Models\Company;
use App\Models\TopService;
use App\Services\CategoryService;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;

class HomeController extends Controller
{
    private ICategoryService $categoryService;

    private Collection $categories;

    public function __construct(CategoryService $categoryService)
    {
        $this->categoryService = $categoryService;
        $this->categories = Category::all();
    }

    public function index()
    {
        return view('home.index', [
            'top' => TopService::all()->map(fn($item) => $item->partner),
            'categories' => $this->categories,
        ]);
    }


    public function listing(Request $request, ?string $category = null, ?string $child = null)
    {
        $adverts = Advert::listing();

        if ($category) {
            $currentCategory = $this->categoryService->getCategory($category)->first();
            $adverts->where('advertisable_type', $currentCategory->service);
        }

        if ($child) {
            $currentChild = $this->categoryService->getCategory($child)->first();
            $adverts->whereHas('tags', function (Builder $query) use ($currentChild) {
                $query->where('category_child_id', $currentChild->id);
            });
        }

        return view('listing.index', [
            'adverts' => $adverts->paginate(6)->fragment('adverts'),
            'categories' => $this->categories,
        ]);
    }

    public function advert(Request $request, Company $company, Advert $advert)
    {
        return view('listing.advert', [
            'partner' => $company->partner,
            'advert' => $advert,
        ]);
    }
}
