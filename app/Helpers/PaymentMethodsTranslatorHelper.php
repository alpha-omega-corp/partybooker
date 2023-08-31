<?php


namespace App\Helpers;


class PaymentMethodsTranslatorHelper
{

	public static $_methods = [
		'cash',
		'invoice',
		'ec-direct',
		'postfinance',
		'visa',
		'american',
	];

	public static function translate($key)
	{
		return SimpleTranslateHelper::translate($key);
	}

}
