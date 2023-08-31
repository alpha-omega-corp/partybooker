<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdatePlanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
	    Schema::table('plans', function(Blueprint $table)
	    {
		    $table->integer('days_period')->nullable()->default(365);

	    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
	    Schema::table('plans', function(Blueprint $table)
	    {
		    $table->dropColumn('days_period');

	    });
    }
}
