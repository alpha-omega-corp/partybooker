<?php


namespace App\Services;

use App\Enums\FormType;
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
}
