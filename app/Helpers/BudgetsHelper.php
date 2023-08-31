<?php


namespace App\Helpers;

class BudgetsHelper
{
	public const BUDGET_RATE_1 = 1;
	public const BUDGET_RATE_2 = 2;
	public const BUDGET_RATE_3 = 3;
	public const BUDGET_RATE_4 = 4;
	public const BUDGET_RATE_5 = 5;
	public const BUDGET_RATE_6 = 6;
        public const BUDGET_RATE_7 = 7;

	public static $_budgets = [
		self::BUDGET_RATE_1 => '0 - 1000 CHF',
		self::BUDGET_RATE_2 => '1000 - 2000 CHF',
		self::BUDGET_RATE_3 => '2000 - 5000 CHF',
		self::BUDGET_RATE_4 => '5000 - 8000 CHF',
		self::BUDGET_RATE_5 => '8000 - 10000 CHF',
		self::BUDGET_RATE_6 => '> 10000 CHF',
                self::BUDGET_RATE_7 => 'partner.price_demand'
	];


	public static function getDescription($budget){
            return isset(self::$_budgets[$budget]) ? __(self::$_budgets[$budget]) : $budget;
	}
}
