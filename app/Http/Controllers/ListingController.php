<?php

namespace App\Http\Controllers;

use App\Interfaces\ICategoryService;
use App\Models\Category;
use App\Models\CategoryLocale;
use App\Models\Company;
use App\Services\CategoryService;
use App\Services\PartnerService;
use Butschster\Head\Contracts\MetaTags\MetaInterface;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Collection;

class ListingController extends Controller
{
    private ICategoryService $categoryService;
    private Collection $categories;

    public function __construct(
        CategoryService         $categoryService,
        protected MetaInterface $meta
    )
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

    public function advert(Company $company, ?string $category): View
    {
        $locale = CategoryLocale::where('slug', $category)->first();
        $advert = $company->adverts()->where('category_id', $locale->translatable_id)->firstOrFail();

        $this->meta
            ->prependTitle($company->name)
            ->setDescription($advert->locale->description)
            ->setKeywords($advert->locale->keywords)
            ->setCanonical(route(__('route.company'), $company));

        return view('app.listing.advert', [
            'advert' => $advert,
            'company' => $company
        ]);
    }

    public function company(Company $company)
    {
        return view('app.listing.company', [
            'company' => $company,
        ]);
    }


}
