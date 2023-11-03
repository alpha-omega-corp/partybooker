<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * App\Models\Plans
 *
 * @property int $id
 * @property string $plan_created
 * @property string $name
 * @property string $position
 * @property string $listing
 * @property int $photos_num
 * @property int $video
 * @property int $direct_request
 * @property int $price
 * @property int|null $days_period
 * @property-read Collection|PlanOption[] $planOptions
 * @method static Builder|Plan newModelQuery()
 * @method static Builder|Plan newQuery()
 * @method static Builder|Plan query()
 * @method static Builder|Plan whereDaysPeriod($value)
 * @method static Builder|Plan whereDirectRequest($value)
 * @method static Builder|Plan whereId($value)
 * @method static Builder|Plan whereListing($value)
 * @method static Builder|Plan whereName($value)
 * @method static Builder|Plan wherePhotosNum($value)
 * @method static Builder|Plan wherePlanCreated($value)
 * @method static Builder|Plan wherePosition($value)
 * @method static Builder|Plan wherePrice($value)
 * @method static Builder|Plan whereVideo($value)
 * @mixin Eloquent
 */
class Plan extends Model
{
    public $timestamps = false;

    public $fillable = [
        'name',
    ];

    public function planOptions(): HasMany
    {
        return $this->hasMany(PlanOption::class, 'plans_id');
    }

}
