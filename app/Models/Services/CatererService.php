<?php

namespace App\Models\Services;

use Database\Factories\CatererFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CatererService extends Model
{
    use HasFactory;

    protected $fillable = [

    ];

    protected static function newFactory(): CatererFactory
    {
        return CatererFactory::new();
    }

}
