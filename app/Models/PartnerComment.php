<?php

namespace App\Models;

use Database\Factories\PartnerCommentFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PartnerComment extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'french',
        'english'
    ];

    protected static function newFactory(): PartnerCommentFactory
    {
        return PartnerCommentFactory::new();
    }

    public function partner(): BelongsTo
    {
        return $this->belongsTo(Partner::class);
    }
}
