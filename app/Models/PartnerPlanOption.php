<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\PartnerPlanOption
 *
 * @property int $id
 * @property int $partners_info_id
 * @property int $categories_count
 * @property int $sub_categories_count
 * @property int|null $extra
 * @property int|null $active
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PartnerPlanOption newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PartnerPlanOption newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PartnerPlanOption query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PartnerPlanOption whereActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PartnerPlanOption whereCategoriesCount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PartnerPlanOption whereExtra($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PartnerPlanOption whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PartnerPlanOption wherePartnersInfoId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PartnerPlanOption whereSubCategoriesCount($value)
 * @mixin \Eloquent
 */
class PartnerPlanOption extends Model
{

	public $timestamps;


	protected $fillable = ['active'];

	protected $casts = [
		'active' => 'bool'
	];

}
