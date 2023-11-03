<?php


namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\PlanOption
 *
 * @property int $id
 * @property int $plans_id
 * @property int $categories_count
 * @property int $sub_categories_count
 * @property int $group
 * @property-read Plan $plan
 * @method static Builder|PlanOption newModelQuery()
 * @method static Builder|PlanOption newQuery()
 * @method static Builder|PlanOption query()
 * @method static Builder|PlanOption whereCategoriesCount($value)
 * @method static Builder|PlanOption whereGroup($value)
 * @method static Builder|PlanOption whereId($value)
 * @method static Builder|PlanOption wherePlansId($value)
 * @method static Builder|PlanOption whereSubCategoriesCount($value)
 * @mixin Eloquent
 */
class PlanOption extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'plans_id',
        'categories_count',
        'sub_categories_count',
        'group'
    ];


    public function plan()
    {
        return $this->belongsTo(Plan::class);
    }
}
