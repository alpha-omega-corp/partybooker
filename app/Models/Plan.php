<?php

namespace App\Models;

use Database\Factories\PlanFactory;
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
        'stripe_key'
    ];

    protected static function newFactory(): PlanFactory
    {
        return PlanFactory::new();
    }

    public function planOptions(): HasMany
    {
        return $this->hasMany(PlanOption::class);
    }

    public function payments(): HasMany
    {
        return $this->hasMany(Payment::class);
    }
}
