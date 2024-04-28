<?php

namespace App\Models;

use App\Interfaces\ILocale;
use App\Models\Scopes\LocaleScope;
use App\Traits\HasLangScope;
use Database\Factories\AppUspFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class AppUsp extends Model implements ILocale
{
    use HasFactory;
    use HasLangScope;

    public $timestamps = false;

    protected $fillable = [
        'position',
    ];

    protected static function newFactory(): AppUspFactory
    {
        return AppUspFactory::new();
    }

    public function locale(): HasOne
    {
        return $this->hasOne(AppUspLocale::class);
    }

    public function locales(): HasMany
    {
        return $this->hasMany(AppUspLocale::class)->withoutGlobalScopes([LocaleScope::class]);
    }
}
