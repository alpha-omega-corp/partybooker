<?php

namespace App\Http\Controllers\App;

use App\Enums\AppAboutType;
use App\Enums\Language;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreAppAboutItemRequest;
use App\Http\Requests\StoreAppAboutRequest;
use App\Http\Requests\UpdateAppAboutItemRequest;
use App\Http\Requests\UpdateAppAboutRequest;
use App\Interfaces\IFileService;
use App\Models\AppAbout;
use App\Models\AppAboutItem;
use App\Models\AppAboutItemLocale;
use App\Models\AppAboutLocale;
use App\Services\FileService;
use Illuminate\Http\RedirectResponse;

class AboutController extends Controller
{
    private IFileService $fileService;

    public function __construct(FileService $fileService)
    {
        $this->fileService = $fileService;
    }

    public function store(StoreAppAboutRequest $request): RedirectResponse
    {
        $data = $request->validated();
        $image = $this->fileService->aboutImage($data['image']);

        $about = AppAbout::create([
            'type' => AppAboutType::ABOUT,
            'image' => $image,
        ]);

        AppAboutLocale::create([
            'app_about_id' => $about->id,
            'lang' => Language::FR,
            'title' => $data['title_fr'],
        ]);

        AppAboutLocale::create([
            'app_about_id' => $about->id,
            'lang' => Language::EN,
            'title' => $data['title_en'],
        ]);

        return back()->with('success', 'About created successfully');
    }

    public function destroy(AppAbout $about): RedirectResponse
    {
        $about->delete();
        return back()->with('success', 'About deleted successfully');
    }

    public function createItem(AppAbout $about, StoreAppAboutItemRequest $request): RedirectResponse
    {
        $data = $request->validated();

        $item = AppAboutItem::create([
            'app_about_id' => $about->id,
        ]);

        AppAboutItemLocale::create([
            'app_about_item_id' => $item->id,
            'lang' => Language::FR,
            'content' => $data['content_fr'],
        ]);

        AppAboutItemLocale::create([
            'app_about_item_id' => $item->id,
            'lang' => Language::EN,
            'content' => $data['content_en'],
        ]);

        return back()->with('success', 'About item created successfully');
    }

    public function editItem(AppAbout $about, UpdateAppAboutItemRequest $request): RedirectResponse
    {
        $data = $request->validated();

        $about->update([
            'service' => $data['service'],
        ]);

        return back()->with('success', 'About item updated successfully');
    }

    public function update(AppAbout $about, UpdateAppAboutRequest $request): RedirectResponse
    {
        $data = $request->validated();

        if (isset($data['image'])) {
            $image = $this->fileService->aboutImage($data['image']);
        }

        $about->update([
            'name' => $data['name'],
            'image' => $image ?? $about->image,
        ]);

        return back()->with('success', 'About updated successfully');
    }

    public function destroyItem(AppAboutItem $item): RedirectResponse
    {
        $item->delete();
        return back()->with('success', 'About item deleted successfully');
    }
}
