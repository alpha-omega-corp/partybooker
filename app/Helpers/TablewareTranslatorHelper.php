<?php


namespace App\Helpers;


class TablewareTranslatorHelper
{

	public static $_items = [
		'glasses',
		'wine-glasses',
		'plates',
		'cutlery',
		'chafing-dishes',
		'serving-cutlery',
		'bread-baskets',
	];


	public static function translate($key)
	{
		return SimpleTranslateHelper::translate($key);
	}

}
