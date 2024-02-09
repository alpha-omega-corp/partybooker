<?php

namespace App\Models;

use Database\Factories\CompanyMediaFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CompanyMedia extends Model
{
    use HasFactory;

    protected $table = 'company_medias';
    protected $fillable = [
        'www',
        'youtube',
        'instagram',
        'facebook',
        'tiktok',
        'twitter',
        'linkedin',
        'vimeo'
    ];

    protected static function newFactory(): CompanyMediaFactory
    {
        return CompanyMediaFactory::new();
    }

    public function company(): BelongsTo
    {
        return $this->belongsTo(Company::class, 'company_id', 'id');
    }
}
