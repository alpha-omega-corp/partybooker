<?php

namespace App\Models;

use App\Interfaces\ILocale;
use App\Traits\HasLangScope;
use Database\Factories\AppAboutItemFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class AppAboutItem extends Model implements ILocale
{
    use HasFactory;
    use HasLangScope;

    protected $fillable = [
        'app_about_id',
    ];

    protected static function newFactory(): AppAboutItemFactory
    {
        return AppAboutItemFactory::new();
    }

    public function locale(): HasOne
    {
        return $this->hasOne(AppAboutItemLocale::class);
    }

    public function about(): BelongsTo
    {
        return $this->belongsTo(AppAbout::class, 'app_about_id', 'id');
    }
}
