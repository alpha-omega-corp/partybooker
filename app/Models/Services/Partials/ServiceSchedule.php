<?php

namespace App\Models\Services\Partials;

use Database\Factories\ServiceScheduleFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceSchedule extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'timetable',
        'holidays',
        'has_extension',
        'extension_specs',
    ];

    protected $casts = [
        'timetable' => 'array',
        'holidays' => 'array',
        'extension_specs' => 'array',
        'has_extension' => 'boolean',
    ];

    protected static function newFactory(): ServiceScheduleFactory
    {
        return ServiceScheduleFactory::new();
    }
}
