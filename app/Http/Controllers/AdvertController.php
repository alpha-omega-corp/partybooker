<?php

namespace App\Http\Controllers;


use App\Enums\CategoryType;
use App\Enums\Language;
use App\Http\Requests\StoreAdvertRequest;
use App\Http\Requests\UpdateAdvertAccessRequest;
use App\Http\Requests\UpdateAdvertRequest;
use App\Interfaces\IFileService;
use App\Models\Advert;
use App\Models\AdvertService;
use App\Models\Category;
use App\Models\Partner;
use App\Models\ServiceCaterer;
use App\Models\ServiceEntertainment;
use App\Models\ServiceEquipment;
use App\Models\ServiceEvent;
use App\Models\ServiceWine;
use App\Services\FileService;
use Illuminate\Http\RedirectResponse;

class AdvertController extends Controller
{
    private IFileService $fileService;

    public function __construct(FileService $fileService)
    {
        $this->fileService = $fileService;
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
        ]);

        $advert = $partner->company->adverts()->create([
            'slug' => $data['slug'],
            'category_id' => $category->id,
            'company_id' => $partner->company->id,
            'advert_service_id' => $advertService->id,
        ]);


        return back()->with('success', 'Advert created successfully');
    }

    public function status(Advert $advert): RedirectResponse
    {
        $advert->update(['is_public' => !$advert->is_public]);

        return back()->with('success', 'Advert status updated successfully');
    }

    public function update(Advert $advert, UpdateAdvertRequest $request): RedirectResponse
    {
        $data = $request->validated();
        $advert->ofLang(Language::FR)->find($advert->id)->locale->update([
            'title' => $data['title_fr'],
            'description' => $data['description_fr'],
        ]);

        $advert->ofLang(Language::EN)->find($advert->id)->locale->update([
            'title' => $data['title_en'],
            'description' => $data['description_en'],
        ]);

        return back()->with('success', 'Advert updated successfully');
    }

    public function access(Advert $advert, UpdateAdvertAccessRequest $request): RedirectResponse
    {
        $data = $request->validated();
        $advert->update(['slug' => $data['slug']]);

        return back()->with('success', 'Advert access updated successfully');
    }

    public function destroy(Advert $advert): RedirectResponse
    {
        $this->fileService->delete($advert->images);
        $advert->delete();

        return back()->with('success', 'Advert deleted successfully');
    }


}

