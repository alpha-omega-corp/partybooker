<?php

namespace App\Http\Controllers;

use App\Interfaces\ICategoryService;
use App\Interfaces\IListingService;
use App\Interfaces\IPartnerService;
use App\Models\Category;
use App\Models\CategoryLocale;
use App\Models\Company;
use App\Services\CategoryService;
use App\Services\ListingService;
use App\Services\PartnerService;
use Butschster\Head\Contracts\MetaTags\MetaInterface;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;

class ListingController extends Controller
{
    private ICategoryService $categoryService;
    private IPartnerService $partnerService;
    private IListingService $listingService;
    private Collection $categories;

    public function __construct(
        CategoryService         $categoryService,
        PartnerService          $partnerService,
        ListingService          $listingService,
        protected MetaInterface $meta
    )
    {
        $this->categoryService = $categoryService;
        $this->partnerService = $partnerService;
        $this->listingService = $listingService;
        $this->categories = Category::all();
    }

    public function index(?string $category = null, ?string $tag = null)
    {
        $adverts = $this->categoryService
            ->filterCategory($category, $tag)
            ->paginate(10)
            ->fragment('adverts');

        $activeCategory = $category ? $this->categoryService->getCategory($category)->first() : null;

        $this->meta
            ->setDescription(__('meta.listing'))
            ->setCanonical(route(__('route.listing'), [
                'category' => $category,
                'tag' => $tag
            ]));

        return view('app.listing.index', [
            'active' => $activeCategory,
            'categories' => $this->categories,
            'adverts' => $adverts,
            'top' => $this->partnerService->topServices(),
            'topRandom' => $this->partnerService->topServices(true),
            'locations' => $this->listingService->getLocations()
        ]);
    }

    public function advert(Company $company, ?string $category): View
    {
        $locale = CategoryLocale::where('slug', $category)->first();
        $advert = $company->adverts()->where('category_id', $locale->translatable_id)->firstOrFail();
        $meta = Str::words(html_entity_decode(strip_tags($advert->locale->description)), 20);

        $this->meta
            ->prependTitle($advert->locale->title)
            ->setDescription($meta)
            ->setKeywords($advert->locale->keywords)
            ->setCanonical(route(__('route.company'), $company));

        return view('app.listing.advert', [
            'advert' => $advert,
            'company' => $company
        ]);
    }

    public function company(Company $company)
    {
        $meta = Str::words(html_entity_decode(strip_tags($company->locale->description)), 20);

        $this->meta
            ->prependTitle($company->name)
            ->setDescription($meta)
            ->setCanonical(route(__('route.listing')));

        return view('app.listing.company', [
            'company' => $company,
        ]);
    }


}
