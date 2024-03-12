<?php

namespace App\Traits;

use App\Enums\Language;
use App\Models\Scopes\LocaleScope;
use Illuminate\Database\Eloquent\Builder;

trait HasLocale
{
    public function scopeOfLang(Builder $query, Language $lang): void
    {
        $query->with(['locale' => function ($query) use ($lang) {
            $query
                ->where('lang', $lang)
                ->withoutGlobalScopes([LocaleScope::class]);
        }])->find($this->id);
    }
}
