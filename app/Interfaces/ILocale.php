<?php

namespace App\Interfaces;


use App\Enums\Language;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\HasOne;

// Use on localized models
interface ILocale
{
    public function locale(): HasOne;

    public function scopeOfLang(Builder $query, Language $lang): void;
}
