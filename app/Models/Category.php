<?php

namespace App\Models;

use App\Enums\CategoryType;
use Database\Factories\CategoryFactory;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;


class Category extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'service',
    ];

    protected static function newFactory(): CategoryFactory
    {
        return CategoryFactory::new();
    }

    public function locale(): MorphMany
    {
        return $this->morphMany(CategoryLocale::class, 'categorizable');
    }

    public function children(): HasMany
    {
        return $this->hasMany(CategoryTag::class);
    }

    public function scopeOfType(Builder $query, CategoryType $type): void
    {
        $query->where('service', $type->value);
    }

}
