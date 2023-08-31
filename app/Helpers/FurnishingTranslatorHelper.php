<?php


namespace App\Helpers;


class FurnishingTranslatorHelper
{

	public static $_items = [
		'tables',
		'chairs',
		'benches',
		'cocktail-tables',
		'buffet',
		'tents',
	];

	public static function translate($key)
	{
		return SimpleTranslateHelper::translate($key);
	}

}
