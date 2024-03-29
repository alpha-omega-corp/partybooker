<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class AdvertForm extends Pivot
{
    public $timestamps = false;
    public $table = 'advert_forms';
}
