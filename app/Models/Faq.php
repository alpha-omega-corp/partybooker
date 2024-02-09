<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
    use HasFactory;


    protected static function newFactory(): FaqFactory
    {
        return FaqFactory::new();
    }
}
