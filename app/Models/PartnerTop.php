<?php

namespace App\Models;

use Database\Factories\PartnerTopFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PartnerTop extends Model
{
    use HasFactory;

    protected $fillable = [
        'partner_id'
    ];

    protected static function newFactory(): PartnerTopFactory
    {
        return PartnerTopFactory::new();
    }

    public function partner(): BelongsTo
    {
        return $this->belongsTo(Partner::class);
    }
}
