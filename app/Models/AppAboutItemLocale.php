<?php

namespace App\Models;

use Database\Factories\AppAboutItemLocaleFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class AppAboutItemLocale extends Model
{
    use HasFactory;

    protected $fillable = [
        'content',
        'app_about_item_id',
    ];

    protected static function newFactory(): AppAboutItemLocaleFactory
    {
        return AppAboutItemLocaleFactory::new();
    }

    public function item(): BelongsTo
    {
        return $this->belongsTo(AppAboutItem::class, 'app_about_item_id', 'id');
    }
}
