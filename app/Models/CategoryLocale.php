<?php


namespace App\Models;

use App\Models\Scopes\LocaleScope;
use Database\Factories\CategoryLocaleFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class CategoryLocale extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = [
        'categorizable_id',
        'categorizable_type',
        'lang',
        'slug',
        'title',
        'description',
        'keywords'
    ];

    protected $casts = [
        'keywords' => 'array'
    ];

    protected static function newFactory(): CategoryLocaleFactory
    {
        return CategoryLocaleFactory::new();
    }

    protected static function booted(): void
    {
        static::addGlobalScope(new LocaleScope());
    }

    public function translatable(): MorphTo
    {
        return $this->morphTo();
    }

}
