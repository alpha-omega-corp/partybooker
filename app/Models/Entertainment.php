<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Entertainment
 *
 * @property int $id
 * @property string $id_partner
 * @property string $working_days
 * @property string $duration
 * @property string|null $holidays
 * @property string $price_for
 * @property string|null $other_price
 * @property string $extansion
 * @property string|null $ext_true
 * @property string $paymeny
 * @property string|null $other_payment
 * @property string $deposit
 * @property string|null $travelling_exp
 * @property string|null $additional_exp
 * @property string $geo
 * @property string $services
 * @property int $participants
 * @property string $equipment
 * @property string|null $eq_not_incl
 * @property string $biography
 * @property string|null $reference
 * @property string|null $comment
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Entertainment newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Entertainment newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Entertainment query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Entertainment whereAdditionalExp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Entertainment whereBiography($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Entertainment whereComment($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Entertainment whereDeposit($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Entertainment whereDuration($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Entertainment whereEqNotIncl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Entertainment whereEquipment($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Entertainment whereExtTrue($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Entertainment whereExtansion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Entertainment whereGeo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Entertainment whereHolidays($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Entertainment whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Entertainment whereIdPartner($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Entertainment whereOtherPayment($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Entertainment whereOtherPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Entertainment whereParticipants($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Entertainment wherePaymeny($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Entertainment wherePriceFor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Entertainment whereReference($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Entertainment whereServices($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Entertainment whereTravellingExp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Entertainment whereWorkingDays($value)
 * @mixin \Eloquent
 */
class Entertainment extends Model
{

	public $table = 'entertainment';

	public $timestamps = false;

	protected $fillable = [
		'id_partner',
		'working_days',
		'duration',
		'holidays',
//		'price_for',
//		'other_price',
		'extansion',
		'ext_true',
		'paymeny',
		'other_payment',
		'deposit',
		'travelling_exp',
		'additional_exp',
		'geo',
		'services',
		'participants',
		'equipment',
		'eq_not_incl',
		'biography',
		'reference',
		'comment',
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
