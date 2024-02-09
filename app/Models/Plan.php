<?php

namespace App\Models;

use Database\Factories\PlanFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
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
        'stripe_key',
        'plan_option_id'
    ];

    protected static function newFactory(): PlanFactory
    {
        return PlanFactory::new();
    }

    public function option(): BelongsTo
    {
        return $this->belongsTo(PlanOption::class, 'plan_option_id', 'id');
    }

    public function payments(): HasMany
    {
        return $this->hasMany(Payment::class);
    }
}
