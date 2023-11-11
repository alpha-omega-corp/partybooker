<?php


namespace App\Models;


use Database\Factories\EquipmentFactory;
use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use ReflectionClass;

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
 * @method static Builder|Equipment newModelQuery()
 * @method static Builder|Equipment newQuery()
 * @method static Builder|Equipment query()
 * @method static Builder|Equipment whereClosing($value)
 * @method static Builder|Equipment whereComment($value)
 * @method static Builder|Equipment whereComplimServices($value)
 * @method static Builder|Equipment whereDelivery($value)
 * @method static Builder|Equipment whereDeposit($value)
 * @method static Builder|Equipment whereExpences($value)
 * @method static Builder|Equipment whereExtTrue($value)
 * @method static Builder|Equipment whereExtansion($value)
 * @method static Builder|Equipment whereGeo($value)
 * @method static Builder|Equipment whereHolidays($value)
 * @method static Builder|Equipment whereId($value)
 * @method static Builder|Equipment whereIdPartner($value)
 * @method static Builder|Equipment whereOpening($value)
 * @method static Builder|Equipment whereOtherPayment($value)
 * @method static Builder|Equipment whereOtherPrice($value)
 * @method static Builder|Equipment wherePaymeny($value)
 * @method static Builder|Equipment wherePriceFor($value)
 * @method static Builder|Equipment whereProposed($value)
 * @method static Builder|Equipment whereReferences($value)
 * @method static Builder|Equipment whereWorkingDays($value)
 * @mixin Eloquent
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
        'budget',
        'price',
        'working_time',
        'price_for',
        'other_price',
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
        return (new ReflectionClass($this))->getShortName();
    }
}
