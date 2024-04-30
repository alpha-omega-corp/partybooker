<?php

namespace App\Models;

use App\Enums\Language;
use App\Models\Scopes\LocaleScope;
use Database\Factories\CategoryTagFactory;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Relations\MorphOne;

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

    public function locale(): MorphOne
    {
        return $this->morphOne(CategoryLocale::class, 'translatable');
    }

    public function locales(): MorphMany
    {
        return $this->morphMany(CategoryLocale::class, 'translatable')
            ->withoutGlobalScopes([LocaleScope::class]);
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function scopeOfLang(Builder $query, Language $lang): void
    {
        $query->with(['locale' => function ($query) use ($lang) {
            $query
                ->where('lang', $lang)
                ->withoutGlobalScopes([LocaleScope::class]);
        }])->find($this->id);
    }
}
