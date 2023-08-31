<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Rate
 *
 * @property int $id
 * @property string $rated
 * @property string $id_partner
 * @property string $user_email
 * @property int $rate
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Rate newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Rate newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Rate query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Rate whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Rate whereIdPartner($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Rate whereRate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Rate whereRated($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Rate whereUserEmail($value)
 * @mixin \Eloquent
 */
class Rate extends Model
{
	public $timestamps = false;

}
