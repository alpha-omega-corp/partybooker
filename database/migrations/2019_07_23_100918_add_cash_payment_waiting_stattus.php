<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCashPaymentWaitingStattus extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
	    Schema::table('partners_info', function (Blueprint $table) {
		    $table->string('waiting_approve_plan')->after('plan')->nullable();
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
		    $table->dropColumn('waiting_approve_plan');
	    });
    }
}
