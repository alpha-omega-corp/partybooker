<?php

namespace App\Models;

use App\Enums\Language;
use App\Models\Scopes\LocaleScope;
use Database\Factories\AdvertLocaleFactory;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class AdvertLocale extends Model
{
    use HasFactory;

    protected $fillable = [
        'translatable_type',
        'translatable_id',
        'lang',
        'title',
        'description',
        'keywords',
    ];

    protected $casts = [
        'keywords' => 'array',
    ];

    protected static function newFactory(): AdvertLocaleFactory
    {
        return AdvertLocaleFactory::new();
    }

    protected static function booted(): void
    {
        static::addGlobalScope(new LocaleScope());
    }

    public function translatable(): MorphTo
    {
        return $this->morphTo();
    }

    public function scopeOfLang(Builder $query, Language $lang): void
    {
        $query->where('lang', $lang->value);
    }

}
