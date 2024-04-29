<?php


namespace App\Models;


use App\Interfaces\ILocale;
use App\Models\Scopes\LocaleScope;
use App\Traits\HasLangScope;
use Database\Factories\AppFaqFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class AppFaq extends Model implements ILocale
{
    use HasFactory;
    use HasLangScope;

    public $timestamps = false;

    protected static function newFactory(): AppFaqFactory
    {
        return AppFaqFactory::new();
    }

    public function locale(): HasOne
    {
        return $this->hasOne(AppFaqLocale::class);
    }

    public function locales(): HasMany
    {
        return $this->hasMany(AppFaqLocale::class)->withoutGlobalScopes([LocaleScope::class]);
    }
}
