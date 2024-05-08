<?php

namespace App\Models;

use App\Models\Scopes\LocaleScope;
use Database\Factories\AppFaqLocaleFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class AppFaqLocale extends Model
{
    use HasFactory;

    protected $fillable = [
        'app_faq_id',
        'lang',
        'question',
        'answer',
    ];

    protected static function newFactory(): AppFaqLocaleFactory
    {
        return AppFaqLocaleFactory::new();
    }

    protected static function booted(): void
    {
        static::addGlobalScope(new LocaleScope());
    }

    public function faq(): BelongsTo
    {
        return $this->belongsTo(AppFaq::class, 'app_faq_id', 'id');
    }
}
