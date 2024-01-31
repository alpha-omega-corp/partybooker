<?php

namespace App\Models;

use Database\Factories\CategoryChildFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class CategoryChild extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'category_id',
    ];

    protected static function newFactory(): CategoryChildFactory
    {
        return CategoryChildFactory::new();
    }

    public function locale(): MorphMany
    {
        return $this->morphMany(CategoryLocale::class, 'categorizable');
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
}
