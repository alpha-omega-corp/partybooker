<?php


namespace App\Models;


use Database\Factories\CatererFactory;
use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use ReflectionClass;

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
 * @method static Builder|Caterer newModelQuery()
 * @method static Builder|Caterer newQuery()
 * @method static Builder|Caterer query()
 * @method static Builder|Caterer whereComment($value)
 * @method static Builder|Caterer whereDecoration($value)
 * @method static Builder|Caterer whereDeposit($value)
 * @method static Builder|Caterer whereFurnishing($value)
 * @method static Builder|Caterer whereGeo($value)
 * @method static Builder|Caterer whereHolidays($value)
 * @method static Builder|Caterer whereId($value)
 * @method static Builder|Caterer whereIdPartner($value)
 * @method static Builder|Caterer whereLogistic($value)
 * @method static Builder|Caterer whereMaxGuests($value)
 * @method static Builder|Caterer whereMenu($value)
 * @method static Builder|Caterer whereMinGuests($value)
 * @method static Builder|Caterer whereOffice($value)
 * @method static Builder|Caterer whereOtherPayment($value)
 * @method static Builder|Caterer whereOtherServices($value)
 * @method static Builder|Caterer wherePTerms($value)
 * @method static Builder|Caterer wherePaymeny($value)
 * @method static Builder|Caterer wherePriceFor($value)
 * @method static Builder|Caterer whereSmood($value)
 * @method static Builder|Caterer whereSpecialities($value)
 * @method static Builder|Caterer whereStaff($value)
 * @method static Builder|Caterer whereTableware($value)
 * @mixin Eloquent
 */
class Caterer extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        "id_partner",
        "holidays",
        "price",
        "budget",
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
        return (new ReflectionClass($this))->getShortName();
    }

}
