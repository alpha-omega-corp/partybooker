<?php

namespace App\Models;

use Database\Factories\CompanyDetailFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CompanyDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'slogan_fr',
        'slogan_en',
        'short_fr',
        'short_en',
        'full_fr',
        'full_en',
        'seo_fr',
        'seo_en',
        'seo_title_fr',
        'seo_title_en',
        'seo_keywords_fr',
        'seo_keywords_en',
    ];

    protected static function newFactory(): CompanyDetailFactory
    {
        return CompanyDetailFactory::new();
    }

    public function company(): BelongsTo
    {
        return $this->belongsTo(Company::class);
    }
}
