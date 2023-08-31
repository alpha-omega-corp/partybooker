<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPartnerServiceOptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
	    Schema::create('partner_plan_options', function (Blueprint $table) {
		    $table->increments('id');
		    $table->integer('partners_info_id')->unsigned();
		    $table->integer('categories_count');
		    $table->integer('sub_categories_count');
		    $table->integer('extra')->nullable();
		    $table->integer('active')->nullable();

		    $table->foreign('partners_info_id')->references('id')->on('partners_info')->onDelete("cascade");
	    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
	    Schema::table('partner_plan_options', function (Blueprint $table) {
	    	$table->dropForeign('partners_info_id_partner');
	    	$table->dropIfExists();
	    });
    }
}
