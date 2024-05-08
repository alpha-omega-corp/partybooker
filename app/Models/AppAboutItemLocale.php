<?php

namespace App\Models;

use App\Models\Scopes\LocaleScope;
use Database\Factories\AppAboutItemLocaleFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class AppAboutItemLocale extends Model
{
    use HasFactory;

    protected $fillable = [
        'content',
        'lang',
        'app_about_item_id',
    ];

    protected static function newFactory(): AppAboutItemLocaleFactory
    {
        return AppAboutItemLocaleFactory::new();
    }

    protected static function booted(): void
    {
        static::addGlobalScope(new LocaleScope());
    }

    public function item(): BelongsTo
    {
        return $this->belongsTo(AppAboutItem::class, 'app_about_item_id', 'id');
    }
}
