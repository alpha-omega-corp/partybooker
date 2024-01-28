<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CategoryLocale extends Model
{
    public $timestamps = false;
    protected $fillable = ['slug'];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'categories_id', 'id');
    }
}
