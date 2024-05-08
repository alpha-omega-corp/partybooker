<?php

namespace App\Models;

use App\Models\Scopes\LocaleScope;
use Database\Factories\AppInformationLocaleFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class AppInformationLocale extends Model
{
    use HasFactory;

    protected $fillable = [
        'app_information_id',
        'lang',
        'title',
        'content',
    ];

    protected static function newFactory(): AppInformationLocaleFactory
    {
        return AppInformationLocaleFactory::new();
    }

    protected static function booted(): void
    {
        static::addGlobalScope(new LocaleScope());
    }

    public function information(): BelongsTo
    {
        return $this->belongsTo(AppInformation::class, 'app_information_id', 'id');
    }

}
