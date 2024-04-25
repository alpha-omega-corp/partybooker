<?php

namespace App\Models;

use Database\Factories\CompanyLocaleFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CompanyLocale extends Model
{
    use HasFactory;
    use IsLocale;

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

    public function company(): BelongsTo
    {
        return $this->belongsTo(Company::class);
    }
}
