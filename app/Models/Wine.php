<?php


namespace App\Models;


use Database\Factories\WineFactory;
use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use ReflectionClass;

/**
 * App\Models\Wine
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
 * @method static Builder|Wine newModelQuery()
 * @method static Builder|Wine newQuery()
 * @method static Builder|Wine query()
 * @method static Builder|Wine whereAffiliation($value)
 * @method static Builder|Wine whereArtD($value)
 * @method static Builder|Wine whereArtL($value)
 * @method static Builder|Wine whereArticle($value)
 * @method static Builder|Wine whereCatererAff($value)
 * @method static Builder|Wine whereCaterersAff($value)
 * @method static Builder|Wine whereCatering($value)
 * @method static Builder|Wine whereClosing($value)
 * @method static Builder|Wine whereComment($value)
 * @method static Builder|Wine whereDeposit($value)
 * @method static Builder|Wine whereEquipment($value)
 * @method static Builder|Wine whereExtTrue($value)
 * @method static Builder|Wine whereExtansion($value)
 * @method static Builder|Wine whereFoodOnSite($value)
 * @method static Builder|Wine whereFurniture($value)
 * @method static Builder|Wine whereHolidays($value)
 * @method static Builder|Wine whereId($value)
 * @method static Builder|Wine whereIdPartner($value)
 * @method static Builder|Wine whereOpening($value)
 * @method static Builder|Wine whereOpeningUpon($value)
 * @method static Builder|Wine whereOtherEquipment($value)
 * @method static Builder|Wine whereOtherFurniture($value)
 * @method static Builder|Wine whereOtherPayment($value)
 * @method static Builder|Wine whereOtherPrice($value)
 * @method static Builder|Wine whereParticipant($value)
 * @method static Builder|Wine wherePaymeny($value)
 * @method static Builder|Wine wherePriceFor($value)
 * @method static Builder|Wine whereReward($value)
 * @method static Builder|Wine whereService($value)
 * @method static Builder|Wine whereWine($value)
 * @method static Builder|Wine whereWorkingDays($value)
 * @method static Builder|Wine whereYesFood($value)
 * @mixin Eloquent
 */
class  Wine extends Model
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
