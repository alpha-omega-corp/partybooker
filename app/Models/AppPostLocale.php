<?php

namespace App\Models;

use App\Models\Scopes\LocaleScope;
use Database\Factories\AppPostLocaleFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class AppPostLocale extends Model
{
    use HasFactory;

    protected $fillable = [
        'app_post_id',
        'lang',
        'slug',
        'alt',
        'title',
        'content',
    ];

    protected static function newFactory(): AppPostLocaleFactory
    {
        return AppPostLocaleFactory::new();
    }

    protected static function booted(): void
    {
        static::addGlobalScope(new LocaleScope());
    }

    public function post(): BelongsTo
    {
        return $this->belongsTo(AppInformation::class, 'app_post_id', 'id');
    }
}
