<?php

namespace App\Models;

use App\Enums\Language;
use App\Models\Scopes\LocaleScope;
use Database\Factories\AdvertImageFactory;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class AdvertImage extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'advert_id',
        'is_thumbnail',
        'path',
    ];

    protected static function newFactory(): AdvertImageFactory
    {
        return AdvertImageFactory::new();
    }

    public function advert(): BelongsTo
    {
        return $this->belongsTo(Advert::class);
    }

    public function locale(): MorphOne
    {
        return $this->morphOne(AdvertLocale::class, 'translatable');
    }

    public function locales(): MorphMany
    {
        return $this->morphMany(AdvertLocale::class, 'translatable')
            ->withoutGlobalScopes([LocaleScope::class]);
    }

    public function scopeOfLang(Builder $query, Language $lang): void
    {
        $query->with(['locale' => function ($query) use ($lang) {
            $query
                ->where('lang', $lang)
                ->withoutGlobalScopes([LocaleScope::class]);
        }])->find($this->id);
    }

    public function scopeThumbnail(Builder $query): void
    {
        $query->where('is_thumbnail', true);
    }

}
