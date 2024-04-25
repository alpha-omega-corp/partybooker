<?php


namespace App\Services;

use App\Enums\FormType;
use App\Interfaces\IListingService;
use App\Models\Advert;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class ListingService implements IListingService
{

    public function __construct()
    {
        //
    }

    public function isService(FormType $type): bool
    {
        return Str::contains(strtolower($type->name), ['service']);
    }

    public function grant(Advert $advert): bool
    {
        return Auth::user() && (Auth::user()->isAdmin() || Auth::user()->id === $advert->company->partner->user->id);
    }

    public function deleteAdvert(Advert $advert): bool
    {
        $advert->tags()->delete();
        $advert->statistics()->delete();
        $advert->images->each(function ($image) {
            $image->locales()->delete();
            $image->delete();
        });

        $advert->service->serviceable()->delete();
        $advert->service->schedule()->delete();
        $advert->service->rate()->delete();
        $advert->service->files()->delete();

        $advert->service()->delete();
        $advert->locales()->delete();
        return $advert->delete();
    }
}
