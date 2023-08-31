<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\PartnerVipPlanCategory
 *
 * @property int $id
 * @property int $partner_vip_plans_id
 * @property string $category
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\PartnerVipPlan $plan
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PartnerVipPlanCategory newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PartnerVipPlanCategory newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PartnerVipPlanCategory query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PartnerVipPlanCategory whereCategory($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PartnerVipPlanCategory whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PartnerVipPlanCategory whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PartnerVipPlanCategory wherePartnerVipPlansId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PartnerVipPlanCategory whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class PartnerVipPlanCategory extends Model
{
    public $timestamps = true;

	public function plan(){
		return $this->belongsTo(PartnerVipPlan::class);
	}

}
