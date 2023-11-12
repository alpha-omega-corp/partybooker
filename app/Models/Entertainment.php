<?php


namespace App\Models;


use Database\Factories\EntertainmentFactory;
use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use ReflectionClass;

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
 * @method static Builder|Entertainment newModelQuery()
 * @method static Builder|Entertainment newQuery()
 * @method static Builder|Entertainment query()
 * @method static Builder|Entertainment whereAdditionalExp($value)
 * @method static Builder|Entertainment whereBiography($value)
 * @method static Builder|Entertainment whereComment($value)
 * @method static Builder|Entertainment whereDeposit($value)
 * @method static Builder|Entertainment whereDuration($value)
 * @method static Builder|Entertainment whereEqNotIncl($value)
 * @method static Builder|Entertainment whereEquipment($value)
 * @method static Builder|Entertainment whereExtTrue($value)
 * @method static Builder|Entertainment whereExtansion($value)
 * @method static Builder|Entertainment whereGeo($value)
 * @method static Builder|Entertainment whereHolidays($value)
 * @method static Builder|Entertainment whereId($value)
 * @method static Builder|Entertainment whereIdPartner($value)
 * @method static Builder|Entertainment whereOtherPayment($value)
 * @method static Builder|Entertainment whereOtherPrice($value)
 * @method static Builder|Entertainment whereParticipants($value)
 * @method static Builder|Entertainment wherePaymeny($value)
 * @method static Builder|Entertainment wherePriceFor($value)
 * @method static Builder|Entertainment whereReference($value)
 * @method static Builder|Entertainment whereServices($value)
 * @method static Builder|Entertainment whereTravellingExp($value)
 * @method static Builder|Entertainment whereWorkingDays($value)
 * @mixin Eloquent
 */
class Entertainment extends Model
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
