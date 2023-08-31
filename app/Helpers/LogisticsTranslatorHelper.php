<?php


namespace App\Helpers;


class LogisticsTranslatorHelper
{

	public static $_methods = [
		'takeaway-menu',
		'delivery',
	];


	public static function translate($key)
	{
		return SimpleTranslateHelper::translate($key);
	}
}
