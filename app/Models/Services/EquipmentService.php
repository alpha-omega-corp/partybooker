<?php


namespace App\Models\Services;


use App\Models\Advert;
use Database\Factories\EquipmentFactory;
use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use ReflectionClass;

/**
 * App\Models\EquipmentService
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
 * @method static Builder|EquipmentService newModelQuery()
 * @method static Builder|EquipmentService newQuery()
 * @method static Builder|EquipmentService query()
 * @method static Builder|EquipmentService whereClosing($value)
 * @method static Builder|EquipmentService whereComment($value)
 * @method static Builder|EquipmentService whereComplimServices($value)
 * @method static Builder|EquipmentService whereDelivery($value)
 * @method static Builder|EquipmentService whereDeposit($value)
 * @method static Builder|EquipmentService whereExpences($value)
 * @method static Builder|EquipmentService whereExtTrue($value)
 * @method static Builder|EquipmentService whereExtansion($value)
 * @method static Builder|EquipmentService whereGeo($value)
 * @method static Builder|EquipmentService whereHolidays($value)
 * @method static Builder|EquipmentService whereId($value)
 * @method static Builder|EquipmentService whereIdPartner($value)
 * @method static Builder|EquipmentService whereOpening($value)
 * @method static Builder|EquipmentService whereOtherPayment($value)
 * @method static Builder|EquipmentService whereOtherPrice($value)
 * @method static Builder|EquipmentService wherePaymeny($value)
 * @method static Builder|EquipmentService wherePriceFor($value)
 * @method static Builder|EquipmentService whereProposed($value)
 * @method static Builder|EquipmentService whereReferences($value)
 * @method static Builder|EquipmentService whereWorkingDays($value)
 * @mixin Eloquent
 */
class EquipmentService extends Model
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
