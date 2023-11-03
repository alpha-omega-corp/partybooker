<?php

namespace App\Models;


use App\User;
use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\PartnersInfo
 *
 * @property int $id
 * @property string $id_partner
 * @property string $en_company_name
 * @property string $fr_company_name
 * @property string|null $slug
 * @property int|null $average_rate
 * @property string|null $plan
 * @property string|null $waiting_approve_plan
 * @property int|null $plan_option
 * @property int|null $payment_status
 * @property int|null $public
 * @property string|null $payed
 * @property string|null $expiration_date
 * @property string $location_code
 * @property string $address
 * @property string|null $lat
 * @property string|null $lon
 * @property string|null $phone
 * @property string|null $company_phone
 * @property string|null $fax
 * @property string|null $logo
 * @property string|null $en_slogan
 * @property string $en_short_descr
 * @property string $en_full_descr
 * @property string|null $fr_slogan
 * @property string $fr_short_descr
 * @property string $fr_full_descr
 * @property string $language
 * @property string|null $other_lang
 * @property string|null $category_1
 * @property string|null $category_2
 * @property string|null $category_3
 * @property string|null $subcat_1
 * @property string|null $subcat_2
 * @property string|null $subcat_3
 * @property int|null $price
 * @property string|null $budget
 * @property string|null $www
 * @property string|null $facebook
 * @property string|null $twitter
 * @property string|null $instagram
 * @property string|null $linkedin
 * @property string|null $youtube
 * @property string|null $vimeo
 * @property string|null $main_img
 * @property string|null $images
 * @method static Builder|PartnersInfo newModelQuery()
 * @method static Builder|PartnersInfo newQuery()
 * @method static Builder|PartnersInfo query()
 * @method static Builder|PartnersInfo whereAddress($value)
 * @method static Builder|PartnersInfo whereAverageRate($value)
 * @method static Builder|PartnersInfo whereBudget($value)
 * @method static Builder|PartnersInfo whereCategory1($value)
 * @method static Builder|PartnersInfo whereCategory2($value)
 * @method static Builder|PartnersInfo whereCategory3($value)
 * @method static Builder|PartnersInfo whereCompanyPhone($value)
 * @method static Builder|PartnersInfo whereEnCompanyName($value)
 * @method static Builder|PartnersInfo whereEnFullDescr($value)
 * @method static Builder|PartnersInfo whereEnShortDescr($value)
 * @method static Builder|PartnersInfo whereEnSlogan($value)
 * @method static Builder|PartnersInfo whereExpirationDate($value)
 * @method static Builder|PartnersInfo whereFacebook($value)
 * @method static Builder|PartnersInfo whereFax($value)
 * @method static Builder|PartnersInfo whereFrCompanyName($value)
 * @method static Builder|PartnersInfo whereFrFullDescr($value)
 * @method static Builder|PartnersInfo whereFrShortDescr($value)
 * @method static Builder|PartnersInfo whereFrSlogan($value)
 * @method static Builder|PartnersInfo whereId($value)
 * @method static Builder|PartnersInfo whereIdPartner($value)
 * @method static Builder|PartnersInfo whereImages($value)
 * @method static Builder|PartnersInfo whereInstagram($value)
 * @method static Builder|PartnersInfo whereLanguage($value)
 * @method static Builder|PartnersInfo whereLat($value)
 * @method static Builder|PartnersInfo whereLinkedin($value)
 * @method static Builder|PartnersInfo whereLocationCode($value)
 * @method static Builder|PartnersInfo whereLogo($value)
 * @method static Builder|PartnersInfo whereLon($value)
 * @method static Builder|PartnersInfo whereMainImg($value)
 * @method static Builder|PartnersInfo whereOtherLang($value)
 * @method static Builder|PartnersInfo wherePayed($value)
 * @method static Builder|PartnersInfo wherePaymentStatus($value)
 * @method static Builder|PartnersInfo wherePhone($value)
 * @method static Builder|PartnersInfo wherePlan($value)
 * @method static Builder|PartnersInfo wherePlanOption($value)
 * @method static Builder|PartnersInfo wherePrice($value)
 * @method static Builder|PartnersInfo wherePublic($value)
 * @method static Builder|PartnersInfo whereSlug($value)
 * @method static Builder|PartnersInfo whereSubcat1($value)
 * @method static Builder|PartnersInfo whereSubcat2($value)
 * @method static Builder|PartnersInfo whereSubcat3($value)
 * @method static Builder|PartnersInfo whereTwitter($value)
 * @method static Builder|PartnersInfo whereVimeo($value)
 * @method static Builder|PartnersInfo whereWaitingApprovePlan($value)
 * @method static Builder|PartnersInfo whereWww($value)
 * @method static Builder|PartnersInfo whereYoutube($value)
 * @mixin Eloquent
 * @property int|null $plans_id
 * @method static Builder|PartnersInfo wherePlansId($value)
 * @property int|null $plan_option_group
 * @property int|null $is_commission
 * @property int|null $commission_amount
 * @property-read Collection|Rate[] $rates
 * @property-read Statistic $statistic
 * @property-read User $user
 * @property-read PartnerVipPlan $vipPlan
 * @method static Builder|PartnersInfo whereCommissionAmount($value)
 * @method static Builder|PartnersInfo whereIsCommission($value)
 * @method static Builder|PartnersInfo wherePlanOptionGroup($value)
 */
class PartnersInfo extends Model
{
    public $timestamps = false;
    protected $table = "partners_info";
    protected $fillable = [
        "plan",
        "plan_option",
        "plans_id",
        "public",
        "category_1",
        "category_2",
        "category_3",
        "subcat_1",
        "subcat_2",
        "subcat_3",
        "id_partner",
        "payed",
        "expiration_date",
        "payment_status",
        "waiting_approve_plan",
        'slug',
        'en_company_name',
        'fr_company_name',
        'location_code',
        'address',
        'lat',
        'lon',
        'phone',
        'company_phone',
        'fax',
        'logo',
        'en_slogan',
        'en_short_descr',
        'en_full_descr',
        'fr_slogan',
        'fr_short_descr',
        'fr_full_descr',
        'language',
        'other_lang',
        'www',
        'facebook',
        'twitter',
        'instagram',
        'linkedin',
        'youtube',
        'vimeo',
        'main_img',
        'images',
        'price',
        'is_commission',
        'commission_amount',
        'plan_option_group',
        'prev_plan_option_group',
        'prev_plan_id',
        'plans_id',
        'priority',
        'en_seo_desc',
        'fr_seo_desc',
        'en_seo_title',
        'fr_seo_title',
        'en_seo_keywords',
        'fr_seo_keywords'
    ];

    public function currentPlan()
    {
        return $this->hasOne(Plan::class, 'id', 'plans_id');
    }

    public function vipPlan()
    {
        return $this->hasOne(PartnerVipPlan::class, 'partners_info_id', 'id');
    }

    public function images()
    {
        return $this->hasMany(ServiceImage::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'id_partner', 'id_partner');
    }

    public function rates()
    {
        return $this->hasMany(Rate::class, 'id_partner', 'id_partner');
    }

    public function statistic()
    {
        return $this->hasOne(Statistic::class, 'id_partner', 'id_partner');
    }

    public function planOptions()
    {
        return $this->hasMany(PartnerPlanOption::class, 'partners_info_id', 'id');
    }

    public function categories()
    {
        return $this->hasMany(AdvertCategory::class, 'partners_info_id', 'id');
    }

    public function services()
    {
        return $this->hasMany(Advert::class, 'partners_info_id', 'id');
    }


    public function eventTypes()
    {
        return $this->belongsToMany(EventType::class, 'partner_event_types');
    }
}
