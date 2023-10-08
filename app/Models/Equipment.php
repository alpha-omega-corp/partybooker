<?php


namespace App\Models;


use Database\Factories\EquipmentFactory;
use Database\Factories\WineFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Equipment
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
 * @property string $delivery
 * @property string $expences
 * @property string $geo
 * @property string $complim_services
 * @property string $proposed
 * @property string|null $references
 * @property string|null $comment
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Equipment newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Equipment newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Equipment query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Equipment whereClosing($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Equipment whereComment($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Equipment whereComplimServices($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Equipment whereDelivery($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Equipment whereDeposit($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Equipment whereExpences($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Equipment whereExtTrue($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Equipment whereExtansion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Equipment whereGeo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Equipment whereHolidays($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Equipment whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Equipment whereIdPartner($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Equipment whereOpening($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Equipment whereOtherPayment($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Equipment whereOtherPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Equipment wherePaymeny($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Equipment wherePriceFor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Equipment whereProposed($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Equipment whereReferences($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Equipment whereWorkingDays($value)
 * @mixin \Eloquent
 */
class Equipment extends Model
{
    use HasFactory;

	public $table = 'equipment';
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
		'delivery',
		'expences',
		'geo',
		'complim_services',
		'proposed',
		'references',
		'comment',
	];

    protected static function newFactory(): EquipmentFactory
    {
        return EquipmentFactory::new();
    }

	public function advert()
	{
		return $this->morphOne(Advert::class, 'service', 'service_type', 'service_id');
	}

	public function getMorphObjectAttribute()
	{
		return (new \ReflectionClass($this))->getShortName();
	}
}
