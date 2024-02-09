<?php

namespace App\Models;

use Database\Factories\ListingScheduleFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ListingSchedule extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'timetable_specs',
        'holiday_specs',
        'extension_specs',
    ];

    protected $casts = [
        'timetable_specs' => 'array',
        'holiday_specs' => 'array',
        'extension_specs' => 'array',
    ];

    protected static function newFactory(): ListingScheduleFactory
    {
        return ListingScheduleFactory::new();
    }
}
