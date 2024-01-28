<?php

namespace App\Models\Services;

use App\Models\Advert;
use App\Models\EventPlace;
use Database\Factories\EventPlaceFactory;
use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use ReflectionClass;

/**
 * App\Models\BusinessService
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
 * @method static Builder|EventPlace newModelQuery()
 * @method static Builder|EventPlace newQuery()
 * @method static Builder|EventPlace query()
 * @method static Builder|EventPlace whereAccomodation($value)
 * @method static Builder|EventPlace whereAffiliateCaterer($value)
 * @method static Builder|EventPlace whereAlcohole($value)
 * @method static Builder|EventPlace whereAlcoholeYes($value)
 * @method static Builder|EventPlace whereBanquet($value)
 * @method static Builder|EventPlace whereCar($value)
 * @method static Builder|EventPlace whereClosing($value)
 * @method static Builder|EventPlace whereCoctail($value)
 * @method static Builder|EventPlace whereComment($value)
 * @method static Builder|EventPlace whereConvenience($value)
 * @method static Builder|EventPlace whereDeposit($value)
 * @method static Builder|EventPlace whereEquipment($value)
 * @method static Builder|EventPlace whereExtFood($value)
 * @method static Builder|EventPlace whereExtTrue($value)
 * @method static Builder|EventPlace whereExtansion($value)
 * @method static Builder|EventPlace whereFacilities($value)
 * @method static Builder|EventPlace whereFreeCaterer($value)
 * @method static Builder|EventPlace whereFurniture($value)
 * @method static Builder|EventPlace whereHolidays($value)
 * @method static Builder|EventPlace whereId($value)
 * @method static Builder|EventPlace whereIdPartner($value)
 * @method static Builder|EventPlace whereMeals($value)
 * @method static Builder|EventPlace whereMoreServices($value)
 * @method static Builder|EventPlace whereNumberQuestrooms($value)
 * @method static Builder|EventPlace whereOpening($value)
 * @method static Builder|EventPlace whereOthFacilities($value)
 * @method static Builder|EventPlace whereOtherEq($value)
 * @method static Builder|EventPlace whereOtherPayment($value)
 * @method static Builder|EventPlace whereOtherPrice($value)
 * @method static Builder|EventPlace whereOtherServices($value)
 * @method static Builder|EventPlace whereOtherStaff($value)
 * @method static Builder|EventPlace whereOutdoor($value)
 * @method static Builder|EventPlace wherePaymeny($value)
 * @method static Builder|EventPlace wherePriceFor($value)
 * @method static Builder|EventPlace whereReducedMob($value)
 * @method static Builder|EventPlace whereRoom($value)
 * @method static Builder|EventPlace whereSitting($value)
 * @method static Builder|EventPlace whereStaff($value)
 * @method static Builder|EventPlace whereWorkingDays($value)
 * @method static Builder|EventPlace whereYesAfCaterers($value)
 * @method static Builder|EventPlace whereYesFreeCaterers($value)
 * @mixin Eloquent
 * @property string|null $working_time
 * @method static Builder|EventPlace whereWorkingTime($value)
 */
class BusinessService extends Model
{
    use HasFactory;

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

    protected static function newFactory(): EventPlaceFactory
    {
        return EventPlaceFactory::new();
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
