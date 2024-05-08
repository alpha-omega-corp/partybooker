<?php

namespace App\Models;

use Database\Factories\AppContactFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AppContact extends Model
{
    use HasFactory;

    protected $fillable = [
        'email',
        'phone',
        'address',
        'facebook',
        'linkedin',
        'instagram',
        'x',
    ];

    protected static function newFactory(): AppContactFactory
    {
        return AppContactFactory::new();
    }
}
