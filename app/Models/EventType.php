<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class EventType extends Model
{
    public $timestamps = false;
    protected $primaryKey = 'id';

    protected $fillable = [
        'en_slug',
        'en_name',
        'fr_slug',
        'fr_name'
    ];

    public function partners(): BelongsToMany
    {
        return $this->belongsToMany(PartnersInfo::class,
            PartnerEventType::class,
            'event_type_id',
            'partners_info_id',
            'id', 'id');
    }
}
