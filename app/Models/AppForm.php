<?php

namespace App\Models;

use App\Enums\FormType;
use App\Interfaces\ILocale;
use App\Traits\HasLangScope;
use Database\Factories\AppFormFactory;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class AppForm extends Model implements ILocale
{
    use HasFactory;
    use HasLangScope;

    protected $fillable = [
        'type'
    ];

    protected static function newFactory(): AppFormFactory
    {
        return AppFormFactory::new();
    }

    public function services(): BelongsToMany
    {
        return $this->belongsToMany(AppForm::class, 'advert_services', 'app_form_id', 'app_form_id');
    }

    public function locale(): HasOne
    {
        return $this->hasOne(AppFormLocale::class);
    }

    public function scopeOfType(Builder $query, FormType $type): Builder
    {
        return $query->where('type', $type->name);
    }
}
