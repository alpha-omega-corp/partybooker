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
        'notifiable_type',
        'notifiable_id',
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

    public function notifiable(): MorphTo
    {
        return $this->morphTo();
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function scopePartnerships(Builder $query): void
    {
        $query->where('notifiable_type', RequestPartner::class);
    }

    public function scopeServices(Builder $query): void
    {
        $query->where('notifiable_type', RequestService::class);
    }

    public function scopeHelps(Builder $query): void
    {
        $query->where('notifiable_type', RequestHelp::class);
    }
}
