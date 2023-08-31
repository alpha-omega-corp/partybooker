<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Statistic
 *
 * @property int $id
 * @property string $id_partner
 * @property int $view
 * @property int $phone
 * @property int $email
 * @property int $website
 * @property int $address
 * @property int $facebook
 * @property int $twitter
 * @property int $instagram
 * @property int $linkedin
 * @property int $vimeo
 * @property int $youtube
 * @property int $direct
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Statistic newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Statistic newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Statistic query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Statistic whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Statistic whereDirect($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Statistic whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Statistic whereFacebook($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Statistic whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Statistic whereIdPartner($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Statistic whereInstagram($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Statistic whereLinkedin($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Statistic wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Statistic whereTwitter($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Statistic whereView($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Statistic whereVimeo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Statistic whereWebsite($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Statistic whereYoutube($value)
 * @mixin \Eloquent
 */
class Statistic extends Model
{
	public $timestamps = false;

	protected $table = 'statistics';

	protected $fillable = ['direct'];
}
