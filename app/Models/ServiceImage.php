<?php

namespace App\Models;

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
 * @property-read \App\Models\PartnersInfo $partner
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ServiceImage newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ServiceImage newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ServiceImage query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ServiceImage whereCategory($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ServiceImage whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ServiceImage whereIdPartner($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ServiceImage whereImageName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ServiceImage whereIsMain($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ServiceImage wherePartnersInfoId($value)
 * @mixin \Eloquent
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

	public function partner(){
		return $this->belongsTo(PartnersInfo::class);
	}
}
