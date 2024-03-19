<?php

namespace App\Models;

use App\Enums\AppContentType;
use App\Interfaces\ILocale;
use App\Traits\HasLangScope;
use Database\Factories\AppContentFactory;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class AppContent extends Model implements ILocale
{
    use HasFactory;
    use HasLangScope;

    public $timestamps = false;
    protected $fillable = [
        'type',
    ];

    protected static function newFactory(): AppContentFactory
    {
        return AppContentFactory::new();
    }

    public function locale(): HasOne
    {
        return $this->hasOne(AppContentLocale::class);
    }

    public function scopeOfType(Builder $query, AppContentType $type): void
    {
        $query->where('type', $type->name);
    }
}
