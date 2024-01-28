<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class TopService extends Model
{
    protected $fillable = [
        'id_partner'
    ];

    public function partner(): BelongsTo
    {
        return $this->belongsTo(Partner::class, 'id_partner', 'id');
    }
}
