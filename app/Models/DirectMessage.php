<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class DirectMessage extends Model
{
    public const TYPE_GENERAL = 'general';
    public const TYPE_CATERER = 'caterer';
    public const TYPE_COMMISSION = 'commission';

    const UPDATED_AT = null;

    public $timestamps = ["created_at"];

    protected $fillable = [
        'partners_info_id',
        'partners_name',
        'type',
        'client_name',
        'client_email',
        'client_phone',
        'message',
        'data',
        'status'
    ];


    public function partner()
    {
        return $this->belongsTo(Partner::class, 'partners_info_id', 'id');
    }

}
