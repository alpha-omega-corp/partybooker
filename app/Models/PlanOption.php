<?php

namespace App\Models;

use Database\Factories\PlanOptionFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class PlanOption extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'advert_count',
        'tag_count',
    ];

    protected static function newFactory(): PlanOptionFactory
    {
        return PlanOptionFactory::new();
    }

    public function plan(): HasOne
    {
        return $this->hasOne(Plan::class, 'plan_option_id', 'id');
    }
}
