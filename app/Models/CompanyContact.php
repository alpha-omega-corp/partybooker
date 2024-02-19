<?php

namespace App\Models;

use Database\Factories\CompanyContactFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class CompanyContact extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'fax',
        'email',
        'phone',
    ];

    protected static function newFactory(): CompanyContactFactory
    {
        return CompanyContactFactory::new();
    }

    public function company(): HasOne
    {
        return $this->hasOne(Company::class);
    }
}
