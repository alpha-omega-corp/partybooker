<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateParntersInfoTableAddPrefPlanInfo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
	    Schema::table('partners_info', function (Blueprint $table) {
		    $table->integer('prev_plan_id')->nullable()->after('plan_option_group');
		    $table->integer('prev_plan_option_group')->nullable()->after('prev_plan_id');
	    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
	    Schema::table('partners_info', function (Blueprint $table) {
	    	$table->dropColumn('prev_plan_id');
	    	$table->dropColumn('prev_plan_option_group');
	    });
    }
}
