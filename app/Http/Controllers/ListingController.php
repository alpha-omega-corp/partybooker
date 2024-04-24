<?php

namespace App\Http\Controllers;

use App\Interfaces\ICategoryService;
use App\Models\Advert;
use App\Models\Category;
use App\Models\Company;
use App\Services\CategoryService;
use App\Services\PartnerService;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Collection;

class ListingController extends Controller
{
    private ICategoryService $categoryService;
    private Collection $categories;

    public function __construct(CategoryService $categoryService)
    {
        $this->categoryService = $categoryService;
        $this->categories = Category::all();
    }

    public function index(?string $category = null, ?string $tag = null)
    {
        $adverts = $this->categoryService
            ->filterCategory($category, $tag)
            ->paginate(10)
            ->fragment('adverts');

        $activeCategory = $category ? $this->categoryService->getCategory($category)->first() : null;

        return view('app.listing.index', [
            'active' => $activeCategory,
            'categories' => $this->categories,
            'adverts' => $adverts,
            'top' => (new PartnerService())->topServices(),
            'topRandom' => (new PartnerService())->topServices(true),
        ]);
    }

    public function advert(Company $company, Advert $advert): View
    {
        return view('app.listing.advert', [
            'advert' => $advert,
            'company' => $company
        ]);
    }


}