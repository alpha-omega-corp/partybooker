<?php


namespace App\Models\Services;


use App\Models\Advert;
use Database\Factories\EntertainmentFactory;
use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use ReflectionClass;

/**
 * App\Models\EntertainmentService
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
 * @method static Builder|EntertainmentService newModelQuery()
 * @method static Builder|EntertainmentService newQuery()
 * @method static Builder|EntertainmentService query()
 * @method static Builder|EntertainmentService whereAdditionalExp($value)
 * @method static Builder|EntertainmentService whereBiography($value)
 * @method static Builder|EntertainmentService whereComment($value)
 * @method static Builder|EntertainmentService whereDeposit($value)
 * @method static Builder|EntertainmentService whereDuration($value)
 * @method static Builder|EntertainmentService whereEqNotIncl($value)
 * @method static Builder|EntertainmentService whereEquipment($value)
 * @method static Builder|EntertainmentService whereExtTrue($value)
 * @method static Builder|EntertainmentService whereExtansion($value)
 * @method static Builder|EntertainmentService whereGeo($value)
 * @method static Builder|EntertainmentService whereHolidays($value)
 * @method static Builder|EntertainmentService whereId($value)
 * @method static Builder|EntertainmentService whereIdPartner($value)
 * @method static Builder|EntertainmentService whereOtherPayment($value)
 * @method static Builder|EntertainmentService whereOtherPrice($value)
 * @method static Builder|EntertainmentService whereParticipants($value)
 * @method static Builder|EntertainmentService wherePaymeny($value)
 * @method static Builder|EntertainmentService wherePriceFor($value)
 * @method static Builder|EntertainmentService whereReference($value)
 * @method static Builder|EntertainmentService whereServices($value)
 * @method static Builder|EntertainmentService whereTravellingExp($value)
 * @method static Builder|EntertainmentService whereWorkingDays($value)
 * @mixin Eloquent
 */
class EntertainmentService extends Model
{
    use HasFactory;

    public $table = 'entertainment';

    public $timestamps = false;

    protected $fillable = [
        'id_partner',
        'working_days',
        'working_time',
        'duration',
        'holidays',
        'price_for',
        'other_price',
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
        'price',
        'budget',
        'comment',
    ];

    protected static function newFactory(): EntertainmentFactory
    {
        return EntertainmentFactory::new();
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
