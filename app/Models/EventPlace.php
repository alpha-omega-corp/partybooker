<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use ReflectionClass;

/**
 * App\Models\EventPlace
 *
 * @property int $id
 * @property string $id_partner
 * @property string $working_days
 * @property string $opening
 * @property string $closing
 * @property string|null $holidays
 * @property string $extansion
 * @property string|null $ext_true
 * @property string $price_for
 * @property string|null $other_price
 * @property string $paymeny
 * @property string|null $other_payment
 * @property string $deposit
 * @property int $coctail
 * @property int $banquet
 * @property int $outdoor
 * @property string $sitting
 * @property string $room
 * @property string $reduced_mob
 * @property int|null $car
 * @property string $facilities
 * @property string|null $oth_facilities
 * @property string $convenience
 * @property string $alcohole
 * @property string|null $alcohole_yes
 * @property string $meals
 * @property string $affiliate_caterer
 * @property string|null $yes_af_caterers
 * @property string $free_caterer
 * @property string|null $yes_free_caterers
 * @property string $ext_food
 * @property string $furniture
 * @property string $equipment
 * @property string|null $other_eq
 * @property string $staff
 * @property string|null $other_staff
 * @property string $accomodation
 * @property int|null $number_questrooms
 * @property string|null $other_services
 * @property string|null $more_services
 * @property string|null $comment
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\EventPlace newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\EventPlace newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\EventPlace query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\EventPlace whereAccomodation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\EventPlace whereAffiliateCaterer($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\EventPlace whereAlcohole($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\EventPlace whereAlcoholeYes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\EventPlace whereBanquet($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\EventPlace whereCar($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\EventPlace whereClosing($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\EventPlace whereCoctail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\EventPlace whereComment($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\EventPlace whereConvenience($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\EventPlace whereDeposit($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\EventPlace whereEquipment($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\EventPlace whereExtFood($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\EventPlace whereExtTrue($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\EventPlace whereExtansion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\EventPlace whereFacilities($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\EventPlace whereFreeCaterer($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\EventPlace whereFurniture($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\EventPlace whereHolidays($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\EventPlace whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\EventPlace whereIdPartner($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\EventPlace whereMeals($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\EventPlace whereMoreServices($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\EventPlace whereNumberQuestrooms($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\EventPlace whereOpening($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\EventPlace whereOthFacilities($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\EventPlace whereOtherEq($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\EventPlace whereOtherPayment($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\EventPlace whereOtherPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\EventPlace whereOtherServices($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\EventPlace whereOtherStaff($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\EventPlace whereOutdoor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\EventPlace wherePaymeny($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\EventPlace wherePriceFor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\EventPlace whereReducedMob($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\EventPlace whereRoom($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\EventPlace whereSitting($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\EventPlace whereStaff($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\EventPlace whereWorkingDays($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\EventPlace whereYesAfCaterers($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\EventPlace whereYesFreeCaterers($value)
 * @mixin \Eloquent
 * @property string|null $working_time
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\EventPlace whereWorkingTime($value)
 */
class EventPlace extends Model
{
	public $timestamps = false;

	protected $fillable = [
		'id_partner',
		'working_days',
		'opening',
		'closing',
		'holidays',
		'extansion',
		'ext_true',
//		'price_for',
//		'other_price',
		'paymeny',
		'other_payment',
		'deposit',
		'coctail',
		'banquet',
		'outdoor',
		'sitting',
		'room',
		'reduced_mob',
		'car',
		'facilities',
		'oth_facilities',
		'convenience',
		'alcohole',
		'alcohole_yes',
		'meals',
		'affiliate_caterer',
		'yes_af_caterers',
		'free_caterer',
		'yes_free_caterers',
		'ext_food',
		'furniture',
		'equipment',
		'other_eq',
		'staff',
		'other_staff',
		'accomodation',
		'number_questrooms',
		'other_services',
		'more_services',
		'comment',
		'working_time'
	];

	protected $casts = [
		'room' => 'array'
	];

	public function advert()
	{
		return $this->morphOne(Advert::class, 'service', 'service_type', 'service_id');
	}

	public function getMorphObjectAttribute()
	{
		return (new \ReflectionClass($this))->getShortName();
	}
}
