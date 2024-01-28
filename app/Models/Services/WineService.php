<?php


namespace App\Models\Services;


use App\Models\Advert;
use Database\Factories\WineFactory;
use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use ReflectionClass;

/**
 * App\Models\WineService
 *
 * @property int $id
 * @property string $id_partner
 * @property string $working_days
 * @property string $opening
 * @property string $closing
 * @property string $opening_upon
 * @property string|null $holidays
 * @property string $extansion
 * @property string|null $ext_true
 * @property string $price_for
 * @property string|null $other_price
 * @property string $paymeny
 * @property string|null $other_payment
 * @property string $deposit
 * @property string $service
 * @property string $participant
 * @property string $wine
 * @property string|null $affiliation
 * @property string|null $reward
 * @property string|null $article
 * @property string|null $art_d
 * @property string|null $art_l
 * @property string $furniture
 * @property string|null $other_furniture
 * @property string $equipment
 * @property string|null $other_equipment
 * @property string $food_on_site
 * @property string|null $yes_food
 * @property string $catering
 * @property string $caterer_aff
 * @property string|null $caterers_aff
 * @property string|null $comment
 * @method static Builder|WineService newModelQuery()
 * @method static Builder|WineService newQuery()
 * @method static Builder|WineService query()
 * @method static Builder|WineService whereAffiliation($value)
 * @method static Builder|WineService whereArtD($value)
 * @method static Builder|WineService whereArtL($value)
 * @method static Builder|WineService whereArticle($value)
 * @method static Builder|WineService whereCatererAff($value)
 * @method static Builder|WineService whereCaterersAff($value)
 * @method static Builder|WineService whereCatering($value)
 * @method static Builder|WineService whereClosing($value)
 * @method static Builder|WineService whereComment($value)
 * @method static Builder|WineService whereDeposit($value)
 * @method static Builder|WineService whereEquipment($value)
 * @method static Builder|WineService whereExtTrue($value)
 * @method static Builder|WineService whereExtansion($value)
 * @method static Builder|WineService whereFoodOnSite($value)
 * @method static Builder|WineService whereFurniture($value)
 * @method static Builder|WineService whereHolidays($value)
 * @method static Builder|WineService whereId($value)
 * @method static Builder|WineService whereIdPartner($value)
 * @method static Builder|WineService whereOpening($value)
 * @method static Builder|WineService whereOpeningUpon($value)
 * @method static Builder|WineService whereOtherEquipment($value)
 * @method static Builder|WineService whereOtherFurniture($value)
 * @method static Builder|WineService whereOtherPayment($value)
 * @method static Builder|WineService whereOtherPrice($value)
 * @method static Builder|WineService whereParticipant($value)
 * @method static Builder|WineService wherePaymeny($value)
 * @method static Builder|WineService wherePriceFor($value)
 * @method static Builder|WineService whereReward($value)
 * @method static Builder|WineService whereService($value)
 * @method static Builder|WineService whereWine($value)
 * @method static Builder|WineService whereWorkingDays($value)
 * @method static Builder|WineService whereYesFood($value)
 * @mixin Eloquent
 */
class  WineService extends Model
{
    use HasFactory;


    public $timestamps = false;

    protected $table = 'wine';

    protected $fillable = [
        'id_partner',
        'budget',
        'price',
        'working_time',
        'working_days',
        'opening',
        'closing',
        'opening_upon',
        'holidays',
        'extansion',
        'ext_true',
        'price_for',
        'other_price',
        'paymeny',
        'other_payment',
        'deposit',
        'service',
        'participant',
        'wine',
        'affiliation',
        'reward',
        'article',
        'art_d',
        'art_l',
        'furniture',
        'other_furniture',
        'equipment',
        'other_equipment',
        'food_on_site',
        'yes_food',
        'catering',
        'caterer_aff',
        'caterers_aff',
        'comment'
    ];

    protected $casts = [
        'service' => 'array',
        'reward' => 'array',
    ];

    protected static function newFactory(): WineFactory
    {
        return WineFactory::new();
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
