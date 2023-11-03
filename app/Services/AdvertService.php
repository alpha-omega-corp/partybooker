<?php


namespace App\Services;

use App\Interfaces\IAdvertService;
use App\Models\Advert;
use App\Models\AdvertCategory;
use App\Models\PartnersInfo;
use Illuminate\Support\Facades\Auth;

class AdvertService implements IAdvertService
{
    public function canPublish(): bool
    {
        return !in_array(false, $this->canPublishMatrix());
    }

    public function canPublishMatrix(): array
    {
        $user = Auth::user();
        $partnerInfo = PartnersInfo::where('id_partner', $user->id_partner)->first();
        $advertCategory = AdvertCategory::where('id_partner', $user->id_partner);
        $advert = Advert::where('partners_info_id', $partnerInfo->id);

        $requiredCompanyDetails = [
            $partnerInfo->en_slogan,
            $partnerInfo->en_full_descr,
            $partnerInfo->en_short_descr,
            $partnerInfo->fr_slogan,
            $partnerInfo->fr_full_descr,
            $partnerInfo->fr_short_descr,
        ];

        return [
            'chooseThumbnail' => $partnerInfo->main_img !== null,
            'chooseCategory' => $advertCategory->exists(),
            'serviceDetails' => $advert->exists() && $advert->first()->status !== Advert::STATUS_DRAFT,
            'companyDetails' => !in_array(null, $requiredCompanyDetails),
        ];
    }
}
