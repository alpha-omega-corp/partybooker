<?php


namespace App\Models;

use Database\Factories\PostFactory;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'author',
        'slug',
        'image',
        'alt_fr',
        'alt_en',
        'title_en',
        'title_fr',
        'content_fr',
        'content_en',
        'status',
    ];

    protected static function newFactory(): PostFactory
    {
        return PostFactory::new();
    }

    public function scopePublished(Builder $query): void
    {
        $query->where('status', 1)->orderBy('created_at');
    }
}
