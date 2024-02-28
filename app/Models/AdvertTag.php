<?php

namespace App\Models;

use Database\Factories\AdvertTagFactory;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class AdvertTag extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'advert_id',
        'category_child_id',
    ];

    protected static function newFactory(): AdvertTagFactory
    {
        return AdvertTagFactory::new();
    }

    public function advert(): BelongsTo
    {
        return $this->belongsTo(Advert::class);
    }

    public function scopeOfTag(Builder $query, int $id): void
    {
        $query->where('category_child_id', $id);
    }
}
