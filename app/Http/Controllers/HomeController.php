<?php

namespace App\Http\Controllers;

use App\Interfaces\ICategoryService;
use App\Models\Category;
use App\Models\Company;
use App\Models\Partner;
use App\Models\Services\EventService;
use App\Models\TopService;
use App\Services\CategoryService;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;

class HomeController extends Controller
{
    private ICategoryService $categoryService;

    private Collection $categories;
    private Collection $eventTypes;

    public function __construct(CategoryService $categoryService)
    {
        $this->categoryService = $categoryService;

        $this->categories = Category::parents()->get()->collect();
        $this->eventTypes = EventService::all()->map(fn($item) => [
            'slug' => $item->{app()->getLocale() . '_slug'},
            'name' => $item->{app()->getLocale() . '_name'}
        ]);
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
        $etFilter = $request->input('event_types');
        $locFilter = $request->input('place');
        $partners = Partner::listing();

        $ads = Company::public();
        dd($ads->get());

        if ($category) {
            $currentCategory = $this->categoryService->getCategory($category);
            dd($partners->with('categories')->get());

            $partners->whereHas('categories', function ($q) use ($currentCategory) {
                $q->where('category_id', $currentCategory->id);
            });
        }

        if ($request->has('event_types')) {
            $partners->whereHas('eventTypes', function ($q) use ($etFilter) {
                $q->whereIn(app()->getLocale() == 'en' ? 'en_slug' : 'fr_slug', $etFilter);
            });
        }

        if ($request->has('place')) {
            $partners->where('location_code', $locFilter);
        }

        return view('home.listing', [
            'partners' => $partners->get(),
            'partnersFragment' => $partners->orderBy('priority')->paginate(6)->fragment('partners'),
            'categories' => $this->categories,
            'eventTypes' => $this->eventTypes,
        ]);
    }
}
