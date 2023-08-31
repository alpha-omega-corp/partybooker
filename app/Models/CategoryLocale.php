<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\CategoryLocale
 *
 * @property int $categories_id
 * @property string $lang
 * @property string $name
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CategoryLocale newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CategoryLocale newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CategoryLocale query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CategoryLocale whereCategoriesId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CategoryLocale whereLang($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CategoryLocale whereName($value)
 * @mixin \Eloquent
 */
class CategoryLocale extends Model
{
	public $timestamps = false;

	protected $fillable = ['slug'];

	public function category(){
		return $this->belongsTo(Category::class, 'categories_id', 'id');
	}
}
