<?php

namespace App\Models;

use Database\Factories\CompanyFactory;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
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
        'public',
    ];

    protected static function newFactory(): CompanyFactory
    {
        return CompanyFactory::new();
    }

    public function partner(): BelongsTo
    {
        return $this->belongsTo(Partner::class);
    }

    public function companyDetail(): HasOne
    {
        return $this->hasOne(CompanyDetail::class);
    }

    public function companySocial(): HasOne
    {
        return $this->hasOne(CompanySocial::class);
    }

    public function scopePublic(Builder $builder): void
    {
        $builder->where('public', true);
    }

}
