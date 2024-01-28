<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\ServiceImage
 *
 * @property int $id
 * @property int $partners_info_id
 * @property string $id_partner
 * @property string $category
 * @property string $image_name
 * @property int|null $is_main
 * @property-read Partner $partner
 * @method static Builder|ServiceImage newModelQuery()
 * @method static Builder|ServiceImage newQuery()
 * @method static Builder|ServiceImage query()
 * @method static Builder|ServiceImage whereCategory($value)
 * @method static Builder|ServiceImage whereId($value)
 * @method static Builder|ServiceImage whereIdPartner($value)
 * @method static Builder|ServiceImage whereImageName($value)
 * @method static Builder|ServiceImage whereIsMain($value)
 * @method static Builder|ServiceImage wherePartnersInfoId($value)
 * @mixin Eloquent
 */
class ServiceImage extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'partners_info_id',
        'id_partner',
        'category',
        'image_name',
        'is_main',
        'image_alt_en',
        'image_alt_fr'
    ];

    public function partner()
    {
        return $this->belongsTo(Partner::class);
    }
}
