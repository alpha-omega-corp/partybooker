<?php


namespace App\Http\Controllers;

use App\Http\Middleware\LocaleMiddleware;

class BaseController extends Controller
{
	protected $user;

	protected $lang;

	public function __construct()
	{
		$this->user = \Auth::user();

		$this->lang = LocaleMiddleware::getLocale();
	}
}
