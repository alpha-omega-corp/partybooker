<?php

namespace App\Models;

use App\Interfaces\ILocale;
use App\Models\Scopes\LocaleScope;
use App\Traits\HasLangScope;
use Database\Factories\CompanyFactory;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Company extends Model implements ILocale
{
    use HasFactory;
    use HasLangScope;

    protected $fillable = [
        'name',
        'slug',
        'logo',
        'languages',
        'company_social_id',
        'company_contact_id',
        'company_location_id',
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

    public function locales(): HasMany
    {
        return $this->hasMany(CompanyLocale::class)->withoutGlobalScopes([LocaleScope::class]);
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

    public function location(): BelongsTo
    {
        return $this->belongsTo(CompanyLocation::class, 'company_location_id', 'id');
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
}
