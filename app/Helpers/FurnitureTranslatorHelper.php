<?php


namespace App\Helpers;


class FurnitureTranslatorHelper
{

	public static $_items = [
		'tables',
		'chairs',
		'benches',
		'tablecloths',
		'tableware',
		'kitchen',
		'warm-up',
		'refrigerator',
		'buffet',
		'cleaning-eq',
		'outdoor-heating',
		'without-furniture',
	];

	public static function translate($key)
	{
		return SimpleTranslateHelper::translate($key);
	}

}
