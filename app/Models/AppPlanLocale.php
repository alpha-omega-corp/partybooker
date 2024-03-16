<?php

namespace App\Models;

use Database\Factories\AppPlanLocaleFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class AppPlanLocale extends Model
{
    use HasFactory;

    protected $fillable = [
        'description'
    ];

    protected static function newFactory(): AppPlanLocaleFactory
    {
        return AppPlanLocaleFactory::new();
    }

    public function plan(): BelongsTo
    {
        return $this->belongsTo(AppPlan::class, 'app_plan_id', 'id');
    }
}
