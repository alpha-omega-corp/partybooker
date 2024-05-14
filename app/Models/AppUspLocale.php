<?php

namespace App\Models;

use App\Models\Scopes\LocaleScope;
use Database\Factories\AppUspLocaleFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class AppUspLocale extends Model
{
    use HasFactory;

    protected $fillable = [
        'app_usp_id',
        'lang',
        'title',
        'description',
    ];

    protected static function newFactory(): AppUspLocaleFactory
    {
        return AppUspLocaleFactory::new();
    }

    protected static function booted(): void
    {
        static::addGlobalScope(new LocaleScope());
    }

    public function usp(): BelongsTo
    {
        return $this->belongsTo(AppUsp::class, 'app_usp_id', 'id');
    }
}
