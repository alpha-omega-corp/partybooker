<?php


namespace App\Models;

use Database\Factories\AdvertFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Advert extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = [
        'company_id',
        'category_id',
    ];

    protected static function newFactory(): AdvertFactory
    {
        return AdvertFactory::new();
    }

    public function service(): MorphTo
    {
        return $this->morphTo();
    }
}
