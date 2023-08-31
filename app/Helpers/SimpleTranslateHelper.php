<?php


namespace App\Helpers;


class SimpleTranslateHelper
{
	public static function translate($key)
	{
		if(isset($key) && (!$key || strlen($key) == 0))
			return '';

		return \Lang::has('partner.'. $key) ? __('partner.'. $key) : $key;
	}
}
