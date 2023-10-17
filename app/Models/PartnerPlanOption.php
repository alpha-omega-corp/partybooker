<?php


namespace App\Models;


use Database\Factories\PartnerPlanOptionFactory;
use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
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
 * @method static Builder|PartnerPlanOption newModelQuery()
 * @method static Builder|PartnerPlanOption newQuery()
 * @method static Builder|PartnerPlanOption query()
 * @method static Builder|PartnerPlanOption whereActive($value)
 * @method static Builder|PartnerPlanOption whereCategoriesCount($value)
 * @method static Builder|PartnerPlanOption whereExtra($value)
 * @method static Builder|PartnerPlanOption whereId($value)
 * @method static Builder|PartnerPlanOption wherePartnersInfoId($value)
 * @method static Builder|PartnerPlanOption whereSubCategoriesCount($value)
 * @mixin Eloquent
 */
class PartnerPlanOption extends Model
{
    use HasFactory;

    public $timestamps;


    protected $fillable = ['active'];

    protected $casts = [
        'active' => 'bool'
    ];

    protected static function newFactory(): PartnerPlanOptionFactory
    {
        return PartnerPlanOptionFactory::new();
    }

}
