<?php

namespace App\Models;

use App\Enums\PlanType;
use Database\Factories\PlanFactory;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Plan extends Model
{
    use HasFactory;

    public $timestamps = false;

    public $fillable = [
        'name',
        'price',
        'uploads',
        'request',
        'video',
        'advert_count',
        'tag_count',
        'stripe_key',
    ];

    protected static function newFactory(): PlanFactory
    {
        return PlanFactory::new();
    }

    public function payments(): HasMany
    {
        return $this->hasMany(Payment::class);
    }

    public function scopeOfType(Builder $query, PlanType $type): void
    {
        $query->where('name', $type);
    }
}
