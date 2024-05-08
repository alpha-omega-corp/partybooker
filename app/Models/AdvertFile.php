<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class AdvertFile extends Model
{
    use HasFactory;

    protected $fillable = [
        'advert_service_id',
        'path',
    ];

    public function service(): BelongsTo
    {
        return $this->belongsTo(AdvertService::class, 'advert_service_id', 'id');
    }
}
