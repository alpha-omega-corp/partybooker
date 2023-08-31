<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

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
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\PlanOption[] $planOptions
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Plans newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Plans newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Plans query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Plans whereDaysPeriod($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Plans whereDirectRequest($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Plans whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Plans whereListing($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Plans whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Plans wherePhotosNum($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Plans wherePlanCreated($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Plans wherePosition($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Plans wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Plans whereVideo($value)
 * @mixin \Eloquent
 */
class Plans extends Model
{
	public $timestamps = false;

	public $fillable = [
		'name'
	];


	public function planOptions()
	{
		return $this->hasMany(PlanOption::class);
	}
}
