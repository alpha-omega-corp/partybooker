<?php

namespace App\Models;

use Database\Factories\CompanyFactory;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Company extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'lat',
        'lon',
        'loc',
        'address',
        'phone',
        'email',
        'fax',
        'logo',
        'company_media_id',
    ];

    protected static function newFactory(): CompanyFactory
    {
        return CompanyFactory::new();
    }

    public function locale(): HasMany
    {
        return $this->hasMany(CompanyLocale::class);
    }

    public function adverts(): HasMany
    {
        return $this->hasMany(Advert::class);
    }

    public function partner(): HasOne
    {
        return $this->hasOne(Partner::class);
    }

    public function media(): HasOne
    {
        return $this->hasOne(CompanyMedia::class, 'id', 'company_media_id');
    }

    public function scopeMain(Builder $query): void
    {
        $query->with('adverts')->whereHas('adverts', function ($advert) {
            $advert->where('is_main', true);
        });
    }


}
