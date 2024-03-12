<?php

namespace App\Models;

use App\Enums\Language;
use App\Models\Scopes\LocaleScope;
use Database\Factories\AppInformationFactory;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class AppInformation extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = 'app_information';

    protected static function newFactory(): AppInformationFactory
    {
        return AppInformationFactory::new();
    }

    public function locale(): HasOne
    {
        return $this->hasOne(AppInformationLocale::class);
    }

    public function scopeOfLang(Builder $query, Language $lang): void
    {
        $query->with(['locale' => function ($query) use ($lang) {
            $query
                ->where('lang', $lang)
                ->withoutGlobalScopes([LocaleScope::class]);
        }])->find($this->id);
    }
}
