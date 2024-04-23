<?php


namespace App\Services;

use App\Enums\FormType;
use App\Models\Advert;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class ListingService
{

    public function __construct()
    {

    }

    public function isService(FormType $type): bool
    {
        return Str::contains(strtolower($type->name), ['service']);
    }

    public function grant(Advert $advert): bool
    {
        return Auth::user() && (Auth::user()->isAdmin() || Auth::user()->id === $advert->company->partner->user->id);
    }
}
