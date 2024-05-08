<?php

namespace App\Models;

use Database\Factories\AdvertScheduleFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class AdvertSchedule extends Model
{
    use HasFactory;

    protected $fillable = [
        'has_extension',
        'extension_description',
        'holidays',
    ];

    protected $casts = [
        'has_extension' => 'boolean',
        'holidays' => 'array',
    ];

    protected static function newFactory(): AdvertScheduleFactory
    {
        return AdvertScheduleFactory::new();
    }

    public function days(): HasMany
    {
        return $this->hasMany(AdvertScheduleDay::class);
    }
}
