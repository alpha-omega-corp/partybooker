<?php


namespace App\Models;

use App\Interfaces\ILocale;
use App\Traits\HasLangScope;
use Database\Factories\AppPostFactory;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class AppPost extends Model implements ILocale
{
    use HasFactory;
    use HasLangScope;

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
}
