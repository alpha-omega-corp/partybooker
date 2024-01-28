<?php


namespace App\Models\Services\Partials;


use App\Models\Partner;
use App\Models\PartnerEventType;
use Database\Factories\ServiceCostFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class ServiceCost extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'payment_methods',
        'prices',
        'budget',
        'deposit',
        'delivery',
        'extra',
        'extra_specs',
        'delivery_specs',
        'deposit_specs',
    ];

    protected static function newFactory(): ServiceCostFactory
    {
        return ServiceCostFactory::new();
    }


    public function partners(): BelongsToMany
    {
        return $this->belongsToMany(Partner::class,
            PartnerEventType::class,
            'event_type_id',
            'partners_info_id',
            'id', 'id');
    }


}
