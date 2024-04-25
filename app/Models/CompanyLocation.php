<?php

namespace App\Models;

use Database\Factories\CompanyLocationFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class CompanyLocation extends Model
{
    use HasFactory;

    protected $fillable = [
        'address',
        'city',
        'state',
        'zip',
        'country',
    ];

    protected static function newFactory(): CompanyLocationFactory
    {
        return CompanyLocationFactory::new();
    }

    public function company(): HasOne
    {
        return $this->hasOne(Company::class);
    }
}
