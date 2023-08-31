<?php


namespace App\Helpers;


class TechnicalEquipmentTranslatorHelper
{

	public static $_items = [
		'wifi-access',
		'beamer',
		'sound-system',
		'audio-visual',
		'no-tech',
	];

	public static function translate($key)
	{
		return SimpleTranslateHelper::translate($key);
	}

}
