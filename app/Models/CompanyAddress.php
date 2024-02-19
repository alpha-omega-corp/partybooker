<?php

namespace App\Models;

use Database\Factories\CompanyAddressFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class CompanyAddress extends Model
{
    use HasFactory;

    protected $fillable = [
        'address',
        'lat',
        'lon',
        'loc',
    ];

    protected static function newFactory(): CompanyAddressFactory
    {
        return CompanyAddressFactory::new();
    }

    public function company(): HasOne
    {
        return $this->hasOne(Company::class);
    }
}
