<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateBudgetValuesForPartners extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    	foreach(\App\Helpers\BudgetsHelper::$_budgets as $k => $v){
    		\App\Models\PartnersInfo::where('budget', $v)->update(['budget' => $k]);
	    }
	    \App\Models\PartnersInfo::whereNull('budget')->update(['budget' => 1]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
