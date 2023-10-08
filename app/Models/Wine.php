<?php


namespace App\Models;


use Database\Factories\EventPlaceFactory;
use Database\Factories\WineFactory;
use Eloquent;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Wine newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Wine newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Wine query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Wine whereAffiliation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Wine whereArtD($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Wine whereArtL($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Wine whereArticle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Wine whereCatererAff($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Wine whereCaterersAff($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Wine whereCatering($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Wine whereClosing($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Wine whereComment($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Wine whereDeposit($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Wine whereEquipment($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Wine whereExtTrue($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Wine whereExtansion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Wine whereFoodOnSite($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Wine whereFurniture($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Wine whereHolidays($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Wine whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Wine whereIdPartner($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Wine whereOpening($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Wine whereOpeningUpon($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Wine whereOtherEquipment($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Wine whereOtherFurniture($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Wine whereOtherPayment($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Wine whereOtherPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Wine whereParticipant($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Wine wherePaymeny($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Wine wherePriceFor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Wine whereReward($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Wine whereService($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Wine whereWine($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Wine whereWorkingDays($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Wine whereYesFood($value)
 * @mixin Eloquent
 */
class  Wine extends Model
{
    use HasFactory;


	public $timestamps = false;

	protected $table = 'wine';

	protected $fillable = [
		'id_partner',
		'working_days',
		'opening',
		'closing',
		'opening_upon',
		'holidays',
		'extansion',
		'ext_true',
//		'price_for',
//		'other_price',
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
		'service' => 'array'
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
		return (new \ReflectionClass($this))->getShortName();
	}

}
