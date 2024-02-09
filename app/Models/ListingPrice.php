<?php


namespace App\Models;


use Database\Factories\ListingPriceFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ListingPrice extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'budget',
        'payment_methods',
        'price_specs',
        'delivery_specs',
        'deposit_specs',
    ];

    protected $casts = [
        'payment_methods' => 'array',
        'price_specs' => 'array',
        'delivery_specs' => 'array',
        'deposit_specs' => 'array',
    ];

    protected static function newFactory(): ListingPriceFactory
    {
        return ListingPriceFactory::new();
    }

}
