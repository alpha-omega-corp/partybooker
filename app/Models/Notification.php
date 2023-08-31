<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Notification
 *
 * @property int $id
 * @property string $event_date
 * @property string $event
 * @property string $description
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Notification newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Notification newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Notification query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Notification whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Notification whereEvent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Notification whereEventDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Notification whereId($value)
 * @mixin \Eloquent
 */
class Notification extends Model
{
    protected $table = 'notification';

    public $timestamps = false;

    protected $fillable = [
        'event_date',
        'event',
        'description'
    ];
}
