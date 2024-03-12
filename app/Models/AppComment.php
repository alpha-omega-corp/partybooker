<?php

namespace App\Models;

use App\Enums\Language;
use App\Models\Scopes\LocaleScope;
use Database\Factories\AppCommentFactory;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class AppComment extends Model
{
    use HasFactory;

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

    public function scopeOfLang(Builder $query, Language $lang): void
    {
        $query->with(['locale' => function ($query) use ($lang) {
            $query
                ->where('lang', $lang)
                ->withoutGlobalScopes([LocaleScope::class]);
        }])->find($this->id);
    }
}
