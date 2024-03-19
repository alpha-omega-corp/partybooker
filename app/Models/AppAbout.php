<?php

namespace App\Models;

use Database\Factories\AppAboutFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class AppAbout extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'image',
    ];

    protected static function newFactory(): AppAboutFactory
    {
        return AppAboutFactory::new();
    }

    public function items(): HasMany
    {
        return $this->hasMany(AppAboutItem::class, 'app_about_id', 'id');
    }
}
