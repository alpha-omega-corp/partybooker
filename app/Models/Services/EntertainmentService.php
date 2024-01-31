<?php


namespace App\Models\Services;


use Database\Factories\EntertainmentFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EntertainmentService extends Model
{
    use HasFactory;

    public $table = 'entertainment';

    public $timestamps = false;

    protected $fillable = [

    ];

    protected static function newFactory(): EntertainmentFactory
    {
        return EntertainmentFactory::new();
    }
}
