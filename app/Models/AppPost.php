<?php


namespace App\Models;

use App\Enums\Language;
use App\Models\Scopes\LocaleScope;
use App\Traits\HasLocale;
use Database\Factories\AppPostFactory;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class AppPost extends Model
{
    use HasFactory;
    use HasLocale;

    protected $fillable = [
        'author',
        'slug',
        'image',
        'status',
    ];

    protected static function newFactory(): AppPostFactory
    {
        return AppPostFactory::new();
    }

    public function locale(): HasOne
    {
        return $this->hasOne(AppPostLocale::class);
    }

    public function scopePublished(Builder $query): void
    {
        $query->where('status', true)->orderBy('created_at');
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
