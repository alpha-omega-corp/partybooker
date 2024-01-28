<?php

namespace App\Models;

use Database\Factories\PlanOptionFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PlanOption extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'categories',
        'children',
        'plan_id',
    ];

    protected static function newFactory(): PlanOptionFactory
    {
        return PlanOptionFactory::new();
    }

    public function plan(): BelongsTo
    {
        return $this->belongsTo(Plan::class);
    }
}
