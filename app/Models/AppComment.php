<?php

namespace App\Models;

use App\Interfaces\ILocale;
use App\Models\Scopes\LocaleScope;
use App\Traits\HasLangScope;
use Database\Factories\AppCommentFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class AppComment extends Model implements ILocale
{
    use HasFactory;
    use HasLangScope;

    public $timestamps = false;

    protected $fillable = [
        'name',
    ];

    protected static function newFactory(): AppCommentFactory
    {
        return AppCommentFactory::new();
    }

    public function locale(): HasOne
    {
        return $this->hasOne(AppCommentLocale::class);
    }

    public function locales(): HasMany
    {
        return $this->hasMany(AppCommentLocale::class)->withoutGlobalScopes([LocaleScope::class]);
    }
}
