<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPlanOptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
	    Schema::create('plan_options', function (Blueprint $table) {
		    $table->increments('id');
		    $table->integer('plans_id')->unsigned();
		    $table->integer('categories_count');
		    $table->integer('sub_categories_count');
		    $table->integer('group');

		    $table->foreign('plans_id')->references('id')->on('plans')->onDelete("cascade");
	    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
	    Schema::table('plan_options', function (Blueprint $table) {
		    $table->dropForeign(['plans_id']);
		    $table->dropIfExists('plan_options');
	    });
    }
}
