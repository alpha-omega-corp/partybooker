<?php


namespace App\Models;


use Database\Factories\CatererFactory;
use Database\Factories\EntertainmentFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Caterer
 *
 * @property int $id
 * @property string $id_partner
 * @property string|null $holidays
 * @property string|null $price_for
 * @property string $paymeny
 * @property string|null $other_payment
 * @property string $deposit
 * @property string|null $p_terms
 * @property string $geo
 * @property int $min_guests
 * @property int $max_guests
 * @property string|null $smood
 * @property string $specialities
 * @property string|null $menu
 * @property string|null $logistic
 * @property string|null $staff
 * @property string|null $tableware
 * @property string|null $furnishing
 * @property string|null $decoration
 * @property string|null $office
 * @property string|null $other_services
 * @property string|null $comment
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Caterer newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Caterer newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Caterer query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Caterer whereComment($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Caterer whereDecoration($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Caterer whereDeposit($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Caterer whereFurnishing($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Caterer whereGeo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Caterer whereHolidays($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Caterer whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Caterer whereIdPartner($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Caterer whereLogistic($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Caterer whereMaxGuests($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Caterer whereMenu($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Caterer whereMinGuests($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Caterer whereOffice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Caterer whereOtherPayment($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Caterer whereOtherServices($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Caterer wherePTerms($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Caterer wherePaymeny($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Caterer wherePriceFor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Caterer whereSmood($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Caterer whereSpecialities($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Caterer whereStaff($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Caterer whereTableware($value)
 * @mixin \Eloquent
 */
class Caterer extends Model {
    use HasFactory;
	public $timestamps = false;

	protected $fillable = [
		"id_partner",
		"holidays",
//		"price_for",
		"paymeny",
		"other_payment",
		"deposit",
		"p_terms",
		"geo",
		"min_guests",
		"max_guests",
		"smood",
		"specialities",
		"menu",
		"logistic",
		"staff",
		"tableware",
		"furnishing",
		"decoration",
		"office",
		"other_services",
		"comment",
	];

    protected static function newFactory(): CatererFactory
    {
        return CatererFactory::new();
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
