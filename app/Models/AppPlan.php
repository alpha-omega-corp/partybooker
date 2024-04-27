<?php

namespace App\Models;

use App\Enums\PlanType;
use App\Interfaces\ILocale;
use App\Traits\HasLangScope;
use Database\Factories\AppPlanFactory;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class AppPlan extends Model implements ILocale
{
    use HasFactory;
    use HasLangScope;

    public $timestamps = false;

    public $fillable = [
        'code',
        'color',
        'price',
        'upload_count',
        'advert_count',
        'tag_count',
        'has_requests',
        'has_videos',
        'stripe_key'
    ];

    protected $casts = [
        'has_requests' => 'boolean',
        'has_videos' => 'boolean'
    ];

    protected static function newFactory(): AppPlanFactory
    {
        return AppPlanFactory::new();
    }

    public function payments(): HasMany
    {
        return $this->hasMany(PartnerPayment::class, 'app_plan_id', 'id');
    }

    public function locale(): HasOne
    {
        return $this->hasOne(AppPlanLocale::class);
    }

    public function scopeOfType(Builder $query, PlanType $type): void
    {
        $query->where('code', $type);
    }
}
