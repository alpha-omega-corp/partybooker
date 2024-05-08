<?php

namespace App\Models;

use App\Models\Scopes\LocaleScope;
use Database\Factories\AppAboutLocaleFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class AppAboutLocale extends Model
{
    use HasFactory;

    protected $fillable = [
        'app_about_id',
        'lang',
        'title',
    ];

    protected static function newFactory(): AppAboutLocaleFactory
    {
        return AppAboutLocaleFactory::new();
    }

    protected static function booted(): void
    {
        static::addGlobalScope(new LocaleScope());
    }

    public function about(): BelongsTo
    {
        return $this->belongsTo(AppAbout::class, 'app_about_id', 'id');
    }
}
