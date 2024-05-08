<?php

namespace App\Models;

use App\Models\Scopes\LocaleScope;
use Database\Factories\AppFormLocaleFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class AppFormLocale extends Model
{
    use HasFactory;

    protected $fillable = [
        'lang',
        'label',
        'app_form_id',
    ];

    protected static function newFactory(): AppFormLocaleFactory
    {
        return AppFormLocaleFactory::new();
    }

    protected static function booted(): void
    {
        static::addGlobalScope(new LocaleScope());
    }

    public function form(): BelongsTo
    {
        return $this->belongsTo(AppForm::class, 'app_form_id', 'id');
    }

}
