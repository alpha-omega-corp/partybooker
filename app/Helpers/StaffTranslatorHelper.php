<?php


namespace App\Helpers;


class StaffTranslatorHelper
{

	public static $_methods = [
		'table-set-up',
		'table-laying',
		'decoration',
		'service-staff',
		'dishwashing',
		'site-cleaning',
	];

	public static function translate($key)
	{
		return SimpleTranslateHelper::translate($key);
	}

}
