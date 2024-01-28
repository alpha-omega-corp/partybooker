<?php

namespace App\Models\Services;

use App\Models\Category;
use Database\Factories\CatererFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class CatererService extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        "id_partner",
        "holidays",
        "price",
        "budget",
        "paymeny",
        "other_payment",
        "deposit",
        "p_terms",
        "geo",
        "min_guests",
        "max_guests",
        "smood",
        "specialities",
        "menu",
        "logistic",
        "staff",
        "tableware",
        "furnishing",
        "decoration",
        "office",
        "other_services",
        "comment",
    ];

    protected static function newFactory(): CatererFactory
    {
        return CatererFactory::new();
    }

    public function category(): MorphOne
    {
        return $this->morphOne(Category::class, 'categorizable');
    }
}
