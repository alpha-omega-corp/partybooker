<?php

namespace App\Models;

use Database\Factories\AdvertScheduleDayFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class AdvertScheduleDay extends Model
{
    use HasFactory;

    protected $fillable = [
        'day',
        'is_open',
        'timetable',
        'advert_schedule_id',
    ];

    protected $casts = [
        'is_open' => 'boolean',
        'timetable' => 'array',
    ];

    protected static function newFactory(): AdvertScheduleDayFactory
    {
        return AdvertScheduleDayFactory::new();
    }

    public function schedule(): BelongsTo
    {
        return $this->belongsTo(AdvertSchedule::class, 'advert_schedule_id', 'id');
    }
}
