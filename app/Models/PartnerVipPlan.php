<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\PartnerVipPlan
 *
 * @property int $id
 * @property int $partners_info_id
 * @property int $is_payed
 * @property int $categories_count
 * @property string $start_date
 * @property string $end_date
 * @property string|null $image
 * @property string|null $website_url
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\PartnerVipPlanCategory[] $categories
 * @property-read \App\Models\PartnersInfo $partner
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PartnerVipPlan newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PartnerVipPlan newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PartnerVipPlan query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PartnerVipPlan whereCategoriesCount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PartnerVipPlan whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PartnerVipPlan whereEndDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PartnerVipPlan whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PartnerVipPlan whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PartnerVipPlan whereIsPayed($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PartnerVipPlan wherePartnersInfoId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PartnerVipPlan whereStartDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PartnerVipPlan whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PartnerVipPlan whereWebsiteUrl($value)
 * @mixin \Eloquent
 */
class PartnerVipPlan extends Model
{
	protected $fillable	= [
		'partners_info_id',
		'is_payed',
		'start_date',
		'end_date',
		'image',
		'website_url',
		'categories_count'
	];

	public const FIRST_CATEGORY_PRICE = 95;
	public const ADDITIONAL_CATEGORY_PRICE = 25;


	public function partner(){
		return $this->belongsTo(PartnersInfo::class);
	}

	public function categories(){
		return $this->hasMany(PartnerVipPlanCategory::class, 'partner_vip_plans_id', 'id');
	}


}
