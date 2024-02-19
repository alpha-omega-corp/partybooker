<?php


namespace App\Models;

use Database\Factories\AdvertFactory;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Advert extends Model
{
    use HasFactory;

    protected $fillable = [
        'slug',
        'title',
        'company_id',
        'advert_service_id',
        'is_public',
        'is_main'
    ];

    protected $casts = [
        'is_public' => 'boolean',
        'is_main' => 'boolean'
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

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function service(): BelongsTo
    {
        return $this->belongsTo(AdvertService::class, 'advert_service_id', 'id');
    }

    public function scopeListing(Builder $query): void
    {
        $query->where('is_public', true);
    }

    public function scopeMain(Builder $query): void
    {
        $query->where('is_main', true);
    }


}
