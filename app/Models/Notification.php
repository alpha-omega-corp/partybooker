<?php


namespace App\Models;


use Database\Factories\NotificationFactory;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphTo;


class Notification extends Model
{
    use HasFactory;

    protected $fillable = [
        'requestable_id',
        'requestable_type',
        'phone',
        'email',
        'message',
        'is_resolved'
    ];

    protected $casts = [
        'is_resolved' => 'boolean'
    ];

    protected static function newFactory(): NotificationFactory
    {
        return NotificationFactory::new();
    }

    public function requestable(): MorphTo
    {
        return $this->morphTo('requestable');
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function scopePartnerships(Builder $query): void
    {
        $query->where('requestable_type', RequestPartner::class);
    }

    public function scopeServices(Builder $query): void
    {
        $query->where('requestable_type', RequestService::class);
    }

    public function scopeHelps(Builder $query): void
    {
        $query->where('requestable_type', RequestHelp::class);
    }
}
