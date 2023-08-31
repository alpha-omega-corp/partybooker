<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class AdvertCategory extends Model
{
	public $timestamps = false;

	public function primaryCategory(){
		return $this->hasOne(Category::class, 'id', 'category_id');
	}
}
