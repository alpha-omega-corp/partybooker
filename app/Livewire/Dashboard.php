<?php

namespace App\Livewire;

use App\Interfaces\IAdvertService;
use App\Interfaces\IPlanService;
use App\Models\Advert;
use App\Models\AdvertCategory;
use App\Models\Category;
use App\Models\PartnerPlanOption;
use App\Models\PartnersInfo;
use App\Models\PlanOption;
use App\Models\ServiceImage;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Dashboard extends Component
{

    public $planOptions;
    public $partnerPlanOptions;
    public $categoriesList;
    public $currentCategories;
    public $categoryImages;
    public $adverts;
    public $thumbnail;
    public $location;
    public $canPublishMatrix;
    public $user;
    public $canPublish;

    public function mount(IAdvertService $advertService, IPlanService $planService): void
    {
        $this->user = Auth::user();
        $partnerInfo = PartnersInfo::where('id_partner', $this->user->id_partner)->first();

        $this->canPublishMatrix = $advertService->canPublishMatrix();
        $this->thumbnail = ServiceImage::where('id_partner', $partnerInfo->id_partner)->where('is_main', true)->first();
        $this->adverts = Advert::where('partners_info_id', $partnerInfo->id)->with(['service'])->orderBy('status')->get();
        $this->categoryImages['cat'] = [
            'count' => $partnerInfo->currentPlan->photos_num ?? 1,
            'images' => ServiceImage::where('id_partner', $partnerInfo->id_partner)->orderBy('is_main', 'DESC')->get()
        ];

        $select = AdvertCategory::where('id_partner', $partnerInfo->id_partner)->get();
        $hash = $select->pluck('category_id', 'sub_category_id')->toArray();
        $this->currentCategories = Category::with(["subCategories" => function ($q) use ($hash) {
            $q->whereIn('id', array_keys($hash));
        }])->whereNull('parent_id')->whereIn('id', array_values($hash))->get();
        $this->categoriesList = Category::whereNull('parent_id')->with(['subCategories', 'subCategories.lang'])->get();
        $this->partnerPlanOptions = PartnerPlanOption::where('partners_info_id', $partnerInfo->id)->get();
        $this->planOptions = $planService->formatOptions(PlanOption::where('plans_id', $partnerInfo->plans_id)->get());
        $this->canPublish = $advertService->canPublish();
        $this->location = [
            'lat' => $partnerInfo->lat,
            'lon' => $partnerInfo->lon,
            'address' => $partnerInfo->address
        ];
    }

    public function render(): View
    {
        return view('livewire.dashboard');
    }
}
