<?php

namespace App\Models;

use App\Models\Scopes\LocaleScope;
use Database\Factories\AppCommentLocaleFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class AppCommentLocale extends Model
{
    use HasFactory;

    protected $fillable = [
        'app_comment_id',
        'lang',
        'content',
    ];

    protected static function newFactory(): AppCommentLocaleFactory
    {
        return AppCommentLocaleFactory::new();
    }

    protected static function booted(): void
    {
        static::addGlobalScope(new LocaleScope());
    }

    public function comment(): BelongsTo
    {
        return $this->belongsTo(AppComment::class, 'app_comment_id', 'id');
    }
}
