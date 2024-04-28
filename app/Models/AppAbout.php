<?php

namespace App\Models;

use App\Enums\AppAboutType;
use App\Interfaces\ILocale;
use App\Traits\HasLangScope;
use Database\Factories\AppAboutFactory;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class AppAbout extends Model implements ILocale
{
    use HasFactory;
    use HasLangScope;

    protected $fillable = [
        'image',
    ];

    protected static function newFactory(): AppAboutFactory
    {
        return AppAboutFactory::new();
    }

    public function locale(): HasOne
    {
        return $this->hasOne(AppAboutLocale::class, 'app_about_id', 'id');
    }

    public function items(): HasMany
    {
        return $this->hasMany(AppAboutItem::class, 'app_about_id', 'id');
    }

    public function scopeOfType(Builder $query, AppAboutType $type): void
    {
        $query->where('type', $type->name);
    }
}
