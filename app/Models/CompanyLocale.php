<?php

namespace App\Models;

use App\Models\Scopes\LocaleScope;
use Database\Factories\CompanyLocaleFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CompanyLocale extends Model
{
    use HasFactory;

    protected $fillable = [
        'lang',
        'name',
        'slogan',
        'description',
        'keywords',
        'company_id'
    ];

    protected $casts = [
        'keywords' => 'array',
    ];

    protected static function newFactory(): CompanyLocaleFactory
    {
        return CompanyLocaleFactory::new();
    }

    protected static function booted(): void
    {
        static::addGlobalScope(new LocaleScope());
    }

    public function company(): BelongsTo
    {
        return $this->belongsTo(Company::class);
    }
}
