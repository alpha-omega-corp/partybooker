<?php


namespace App\Helpers;


class DecorationsTranslatorHelper
{

	public static $_items = [
		'tablecloths',
		'towels',
		'chair-covers',
		'photophores',
		'candlesticks',
		'menu',
		'floral-decoration',
		'mood-light',
	];


	public static function translate($key)
	{
		return SimpleTranslateHelper::translate($key);
	}

}
