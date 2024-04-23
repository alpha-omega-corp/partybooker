<?php


namespace App\Models;

use App\Enums\Language;
use App\Models\Scopes\LocaleScope;
use Database\Factories\AdvertFactory;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class Advert extends Model
{
    use HasFactory;

    protected $fillable = [
        'slug',
        'company_id',
        'category_id',
        'advert_service_id',
        'advert_statistic_id',
        'is_public',
        'is_main'
    ];

    protected $casts = [
        'is_public' => 'boolean',
        'is_main' => 'boolean'
    ];

    protected static function newFactory(): AdvertFactory
    {
        return AdvertFactory::new();
    }

    public function tags(): HasMany
    {
        return $this->hasMany(AdvertTag::class);
    }

    public function images(): HasMany
    {
        return $this->hasMany(AdvertImage::class);
    }

    public function company(): BelongsTo
    {
        return $this->belongsTo(Company::class);
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function statistics(): BelongsTo
    {
        return $this->belongsTo(AdvertStatistic::class, 'advert_statistic_id', 'id');
    }

    public function service(): BelongsTo
    {
        return $this->belongsTo(AdvertService::class, 'advert_service_id', 'id');
    }

    public function locale(): MorphOne
    {
        return $this->morphOne(AdvertLocale::class, 'translatable');
    }

    public function scopeOfLang(Builder $query, Language $lang): void
    {
        $query->with(['locale' => function ($query) use ($lang) {
            $query
                ->where('lang', $lang)
                ->withoutGlobalScopes([LocaleScope::class]);
        }])->find($this->id);
    }

    public function scopeListing(Builder $query): void
    {
        $query->where('is_public', true);
    }

    public function scopeMain(Builder $query): void
    {
        $query->where('is_main', true);
    }
}
