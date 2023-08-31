<?php


namespace App\Helpers;


class ConveniencesTranslatorHelper
{

	public static $_items = [
		'cloakrooms',
		'bathrooms',
	];

	public static function translate($key)
	{
		return SimpleTranslateHelper::translate($key);
	}

}
