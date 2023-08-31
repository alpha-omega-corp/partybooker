<?php

namespace App\Models;

use App\Http\Middleware\LocaleMiddleware;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Category
 *
 * @property int $id
 * @property int|null $parent_id
 * @property string $code
 * @property string|null $slug
 * @property-read \App\Models\CategoryLocale $lang
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\CategoryLocale[] $locales
 * @property-read \App\Models\Category|null $parent
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Category[] $subCategories
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Category newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Category newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Category query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Category whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Category whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Category whereParentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Category whereSlug($value)
 * @mixin \Eloquent
 */
class Category extends Model
{
	public $timestamps = false;

	public function subCategories()
	{
		return $this->hasMany(Category::class, 'parent_id', 'id');
	}

	public function parent()
	{
		return $this->belongsTo(Category::class, 'parent_id', 'id');
	}

	public function locales()
	{
		return $this->hasMany(CategoryLocale::class, 'categories_id', 'id');
	}

	public function lang()
	{
		$lang = LocaleMiddleware::getLocale() ? 'en' : 'fr';
		return $this->hasOne(CategoryLocale::class, 'categories_id', 'id')->where('lang', $lang);
	}
}
