<?php

namespace App\Models;

use App\Enums\Language;
use App\Models\Scopes\LocaleScope;
use Database\Factories\CompanyFactory;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Laravel\Scout\Searchable;

class Company extends Model
{
    use Searchable;
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'logo',
        'languages',
        'company_social_id',
        'company_contact_id',
        'company_address_id',
        'company_statistic_id',
    ];

    protected $casts = [
        'languages' => 'array',
    ];

    protected static function newFactory(): CompanyFactory
    {
        return CompanyFactory::new();
    }

    public function locale(): HasOne
    {
        return $this->hasOne(CompanyLocale::class);
    }

    public function adverts(): HasMany
    {
        return $this->hasMany(Advert::class);
    }

    public function partner(): HasOne
    {
        return $this->hasOne(Partner::class);
    }

    public function statistics(): BelongsTo
    {
        return $this->belongsTo(CompanyStatistic::class, 'company_statistic_id', 'id');
    }

    public function contact(): BelongsTo
    {
        return $this->belongsTo(CompanyContact::class, 'company_contact_id', 'id');
    }

    public function address(): BelongsTo
    {
        return $this->belongsTo(CompanyAddress::class, 'company_address_id', 'id');
    }

    public function social(): BelongsTo
    {
        return $this->belongsTo(CompanySocial::class, 'company_social_id', 'id');
    }

    public function scopeMain(Builder $query): void
    {
        $query->with('adverts')->whereHas('adverts', function ($advert) {
            $advert->where('is_main', true);
        });
    }

    public function scopeOfLang(Builder $query, Language $lang): void
    {
        $query->with(['locale' => function ($query) use ($lang) {
            $query
                ->where('lang', $lang)
                ->withoutGlobalScopes([LocaleScope::class]);
        }]);
    }
}
