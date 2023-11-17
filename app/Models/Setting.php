<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $fillable = [
        'address',
        'email',
        'phone',
        'facebook',
        'linkedin',
        'twitter',
        'instagram',
    ];
}
