<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\PlanOption
 *
 * @property int $id
 * @property int $plans_id
 * @property int $categories_count
 * @property int $sub_categories_count
 * @property int $group
 * @property-read \App\Models\Plans $plan
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PlanOption newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PlanOption newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PlanOption query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PlanOption whereCategoriesCount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PlanOption whereGroup($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PlanOption whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PlanOption wherePlansId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PlanOption whereSubCategoriesCount($value)
 * @mixin \Eloquent
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
		return $this->belongsTo(Plans::class);
	}
}
