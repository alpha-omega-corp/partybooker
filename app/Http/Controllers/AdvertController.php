<?php

namespace App\Http\Controllers;


use App\Enums\CategoryType;
use App\Enums\Language;
use App\Helpers\MetaHelper;
use App\Http\Requests\StoreAdvertRequest;
use App\Http\Requests\StoreAdvertTagRequest;
use App\Http\Requests\UpdateAdvertAccessRequest;
use App\Http\Requests\UpdateAdvertDescriptionRequest;
use App\Http\Requests\UpdateAdvertMetaRequest;
use App\Interfaces\IFileService;
use App\Interfaces\IListingService;
use App\Models\Advert;
use App\Models\AdvertLocale;
use App\Models\AdvertRate;
use App\Models\AdvertSchedule;
use App\Models\AdvertService;
use App\Models\AdvertStatistic;
use App\Models\AdvertTag;
use App\Models\Category;
use App\Models\CategoryTag;
use App\Models\Partner;
use App\Models\ServiceCaterer;
use App\Models\ServiceEntertainment;
use App\Models\ServiceEquipment;
use App\Models\ServiceEvent;
use App\Models\ServiceWine;
use App\Services\FileService;
use App\Services\ListingService;
use Illuminate\Http\RedirectResponse;

class AdvertController extends Controller
{
    private IFileService $fileService;
    private IListingService $listingService;

    public function __construct(FileService $fileService, ListingService $listingService)
    {
        $this->fileService = $fileService;
        $this->listingService = $listingService;
    }

    public function tag(Advert $advert, StoreAdvertTagRequest $request): RedirectResponse
    {
        $data = $request->validated();
        AdvertTag::create([
            'advert_id' => $advert->id,
            'category_tag_id' => $data['tag'],
        ]);

        return back()->with('success', 'Advert tagged successfully');
    }

    public function destroyTag(Advert $advert, CategoryTag $tag)
    {
        AdvertTag::where('advert_id', $advert->id)->where('category_tag_id', $tag->id)->delete();

        return back()->with('success', 'Advert tag deleted successfully');
    }

    public function store(Partner $partner, StoreAdvertRequest $request): RedirectResponse
    {
        $data = $request->validated();
        if (count($partner->company->adverts) >= $partner->payment->plan->advert_count) {
            return back()->with('error', 'You have reached the maximum number of adverts');
        }

        $category = Category::find($data['category']);

        $service = match ($category->service) {
            CategoryType::EVENT->value => ServiceEvent::create(),
            CategoryType::WINE->value => ServiceWine::create(),
            CategoryType::EQUIPMENT->value => ServiceEquipment::create(),
            CategoryType::CATERER->value => ServiceCaterer::create(),
            CategoryType::ENTERTAINMENT->value => ServiceEntertainment::create(),
        };

        $advertService = AdvertService::create([
            'serviceable_type' => $category->service,
            'serviceable_id' => $service->id,
            'advert_schedule_id' => AdvertSchedule::create()->id,
            'advert_rate_id' => AdvertRate::create()->id
        ]);

        $advert = $partner->company->adverts()->create([
            'slug' => $data['slug'],
            'category_id' => $category->id,
            'company_id' => $partner->company->id,
            'advert_service_id' => $advertService->id,
            'advert_statistic_id' => AdvertStatistic::create()->id,
        ]);

        AdvertLocale::create([
            'translatable_type' => Advert::class,
            'translatable_id' => $advert->id,
            'lang' => Language::FR,
            'title' => $data['title_fr'],
        ]);

        AdvertLocale::create([
            'translatable_type' => Advert::class,
            'translatable_id' => $advert->id,
            'lang' => LANGUAGE::EN,
            'title' => $data['title_en'],
        ]);


        return back()->with('success', 'Advert created successfully');
    }

    public function status(Advert $advert): RedirectResponse
    {
        $advert->update(['is_public' => !$advert->is_public]);

        return back()->with('success', 'Advert status updated successfully');
    }

    public function description(Advert $advert, UpdateAdvertDescriptionRequest $request): RedirectResponse
    {
        $data = $request->validated();
        $advert->ofLang(Language::FR)->first()->locale->update([
            'description' => $data['description_fr'],
        ]);

        $advert->ofLang(Language::EN)->first()->locale->update([
            'description' => $data['description_en'],
        ]);

        return back()->with('success', 'Advert updated successfully');
    }

    public function access(Advert $advert, UpdateAdvertAccessRequest $request): RedirectResponse
    {
        $data = $request->validated();
        $advert->update([
            'slug' => $data['slug']
        ]);

        $advert->ofLang(Language::FR)->first()->locale->update([
            'title' => $data['title_fr'],
        ]);

        $advert->ofLang(Language::EN)->first()->locale->update([
            'title' => $data['title_en'],
        ]);

        return back()->with('success', 'Advert access updated successfully');
    }

    public function meta(Advert $advert, UpdateAdvertMetaRequest $request): RedirectResponse
    {
        $data = $request->validated();

        $advert->ofLang(Language::FR)->first()->locale->update([
            'keywords' => MetaHelper::sanitize($data['keywords_fr']),
        ]);

        $advert->ofLang(Language::EN)->first()->locale->update([
            'keywords' => MetaHelper::sanitize($data['keywords_en']),
        ]);

        return back()->with('success', 'Advert SEO updated successfully');
    }

    public function destroy(Advert $advert): RedirectResponse
    {
        $this->fileService->delete($advert->images);
        $this->listingService->deleteAdvert($advert);

        return back()->with('success', 'Advert deleted successfully');
    }


}

