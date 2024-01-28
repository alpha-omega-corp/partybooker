<?php

namespace App\Models;

use Database\Factories\CategoryFactory;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;


class Category extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'categorizable_id',
        'categorizable_type',
    ];

    protected static function newFactory(): CategoryFactory
    {
        return CategoryFactory::new();
    }

    public function categorizable(): MorphTo
    {
        return $this->morphTo();
    }

    public function scopeParents(Builder $query): void
    {
        $query
            ->whereNull('parent_id')
            ->with(['subcategories', 'lang', 'subcategories.lang']);
    }

    public function scopeChildren(Builder $query): void
    {
        $query->whereNotNull('parent_id');
    }
}
