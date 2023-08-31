<?php

namespace App\Models;


use App\User;
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
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PartnersInfo newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PartnersInfo newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PartnersInfo query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PartnersInfo whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PartnersInfo whereAverageRate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PartnersInfo whereBudget($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PartnersInfo whereCategory1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PartnersInfo whereCategory2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PartnersInfo whereCategory3($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PartnersInfo whereCompanyPhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PartnersInfo whereEnCompanyName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PartnersInfo whereEnFullDescr($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PartnersInfo whereEnShortDescr($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PartnersInfo whereEnSlogan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PartnersInfo whereExpirationDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PartnersInfo whereFacebook($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PartnersInfo whereFax($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PartnersInfo whereFrCompanyName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PartnersInfo whereFrFullDescr($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PartnersInfo whereFrShortDescr($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PartnersInfo whereFrSlogan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PartnersInfo whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PartnersInfo whereIdPartner($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PartnersInfo whereImages($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PartnersInfo whereInstagram($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PartnersInfo whereLanguage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PartnersInfo whereLat($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PartnersInfo whereLinkedin($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PartnersInfo whereLocationCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PartnersInfo whereLogo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PartnersInfo whereLon($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PartnersInfo whereMainImg($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PartnersInfo whereOtherLang($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PartnersInfo wherePayed($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PartnersInfo wherePaymentStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PartnersInfo wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PartnersInfo wherePlan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PartnersInfo wherePlanOption($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PartnersInfo wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PartnersInfo wherePublic($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PartnersInfo whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PartnersInfo whereSubcat1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PartnersInfo whereSubcat2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PartnersInfo whereSubcat3($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PartnersInfo whereTwitter($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PartnersInfo whereVimeo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PartnersInfo whereWaitingApprovePlan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PartnersInfo whereWww($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PartnersInfo whereYoutube($value)
 * @mixin \Eloquent
 * @property int|null $plans_id
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PartnersInfo wherePlansId($value)
 * @property int|null $plan_option_group
 * @property int|null $is_commission
 * @property int|null $commission_amount
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Rate[] $rates
 * @property-read \App\Models\Statistic $statistic
 * @property-read \App\User $user
 * @property-read \App\Models\PartnerVipPlan $vipPlan
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PartnersInfo whereCommissionAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PartnersInfo whereIsCommission($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PartnersInfo wherePlanOptionGroup($value)
 */
class PartnersInfo extends Model
{
	protected $table = "partners_info";

	public $timestamps = false;

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
		return $this->hasOne(Plans::class, 'id', 'plans_id');
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


	public function eventTypes(){
		return $this->belongsToMany(EventType::class, 'partner_event_types');
	}
}
