<?php


namespace App\Models;


use Database\Factories\AppFaqFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AppFaq extends Model
{
    use HasFactory;


    public $timestamps = false;

    protected static function newFactory(): AppFaqFactory
    {
        return AppFaqFactory::new();
    }
}
