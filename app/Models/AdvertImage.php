<?php

namespace App\Models;

use Database\Factories\AdvertImageFactory;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class AdvertImage extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'advert_id',
        'is_thumbnail',
        'path',
    ];

    protected static function newFactory(): AdvertImageFactory
    {
        return AdvertImageFactory::new();
    }

    public function advert(): BelongsTo
    {
        return $this->belongsTo(Advert::class);
    }

    public function scopeThumbnail(Builder $query): void
    {
        $query->where('is_thumbnail', true);
    }

}
