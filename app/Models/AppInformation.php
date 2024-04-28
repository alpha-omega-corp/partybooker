<?php

namespace App\Models;

use App\Interfaces\ILocale;
use App\Models\Scopes\LocaleScope;
use App\Traits\HasLangScope;
use Database\Factories\AppInformationFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class AppInformation extends Model implements ILocale
{
    use HasFactory;
    use HasLangScope;

    public $timestamps = false;
    protected $table = 'app_information';

    protected static function newFactory(): AppInformationFactory
    {
        return AppInformationFactory::new();
    }

    public function locale(): HasOne
    {
        return $this->hasOne(AppInformationLocale::class);
    }

    public function locales(): HasMany
    {
        return $this->hasMany(AppInformationLocale::class)->withoutGlobalScopes([LocaleScope::class]);
    }
}
