<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\SwisswinDirectory
 *
 * @property int $id
 * @property string $title
 * @property string $url
 * @property string $image
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\SwisswinDirectory newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\SwisswinDirectory newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\SwisswinDirectory query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\SwisswinDirectory whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\SwisswinDirectory whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\SwisswinDirectory whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\SwisswinDirectory whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\SwisswinDirectory whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\SwisswinDirectory whereUrl($value)
 * @mixin \Eloquent
 */
class SwisswinDirectory extends Model
{
	protected $table = 'swisswin_directories';
}
