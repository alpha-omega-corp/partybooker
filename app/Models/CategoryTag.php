<?php

namespace App\Models;

use Database\Factories\CategoryTagFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class CategoryTag extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'category_id',
    ];

    protected static function newFactory(): CategoryTagFactory
    {
        return CategoryTagFactory::new();
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
