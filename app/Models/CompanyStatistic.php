<?php

namespace App\Models;

use Database\Factories\CompanyStatisticFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class CompanyStatistic extends Model
{
    use HasFactory;

    protected $fillable = [
        'email',
        'phone',
        'website',
        'instagram',
        'facebook',
        'youtube',
        'twitter',
        'linkedin',
    ];

    protected static function newFactory(): CompanyStatisticFactory
    {
        return CompanyStatisticFactory::new();
    }

    public function company(): HasOne
    {
        return $this->hasOne(Company::class);
    }
}
