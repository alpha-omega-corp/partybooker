<?php

namespace App\Models;

use App\Models\Scopes\LocaleScope;
use Database\Factories\AppContentLocaleFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class AppContentLocale extends Model
{
    use HasFactory;

    protected $fillable = [
        'app_content_id',
        'lang',
        'title',
        'content',
    ];

    protected static function newFactory(): AppContentLocaleFactory
    {
        return AppContentLocaleFactory::new();
    }

    protected static function booted(): void
    {
        static::addGlobalScope(new LocaleScope());
    }

    public function content(): BelongsTo
    {
        return $this->belongsTo(AppContent::class, 'app_content_id', 'id');
    }
}
