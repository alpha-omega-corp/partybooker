<?php


namespace App\Models;

use Database\Factories\AdvertFactory;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Advert extends Model
{
    use HasFactory;

    protected $fillable = [
        'company_id',
        'advertisable_id',
        'advertisable_type',
        'title',
        'public',
    ];

    protected static function newFactory(): AdvertFactory
    {
        return AdvertFactory::new();
    }

    public function tags(): HasMany
    {
        return $this->hasMany(AdvertTag::class);
    }

    public function images(): HasMany
    {
        return $this->hasMany(AdvertImage::class);
    }

    public function company(): BelongsTo
    {
        return $this->belongsTo(Company::class);
    }

    public function advertisable(): MorphTo
    {
        return $this->morphTo();
    }

    public function scopeListing(Builder $query): void
    {
        $query->where('public', true);
    }


}
