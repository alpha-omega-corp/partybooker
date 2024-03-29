<?php

namespace App\Models;

use Database\Factories\RequestHelpFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class RequestHelp extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected static function newFactory(): RequestHelpFactory
    {
        return RequestHelpFactory::new();
    }

    public function notification(): MorphOne
    {
        return $this->morphOne(Notification::class, 'notifiable');
    }


}
