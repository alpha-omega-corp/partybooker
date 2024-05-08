<?php

namespace App\Models;

use Database\Factories\CompanySocialFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CompanySocial extends Model
{
    use HasFactory;

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

    protected static function newFactory(): CompanySocialFactory
    {
        return CompanySocialFactory::new();
    }

    public function company(): BelongsTo
    {
        return $this->belongsTo(Company::class, 'company_id', 'id');
    }
}
