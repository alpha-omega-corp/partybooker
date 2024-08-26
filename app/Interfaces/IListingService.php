<?php


namespace App\Interfaces;


use App\Enums\FormType;
use App\Models\Advert;

interface IListingService
{
    public function isService(FormType $type): bool;

    public function grant(Advert $advert): bool;

    public function deleteAdvert(Advert $advert): bool;

    public function getLocations(): array;
}

