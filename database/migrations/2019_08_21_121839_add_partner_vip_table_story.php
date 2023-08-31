<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPartnerVipTableStory extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('partner_vip_plans', function (Blueprint $table){
        	$table->increments('id');
        	$table->integer('partners_info_id')->unsigned();
        	$table->integer('is_payed')->default(0);
        	$table->integer('categories_count');
        	$table->date('start_date');
        	$table->date('end_date');
        	$table->string('image')->nullable();
        	$table->string('website_url')->nullable();
        	$table->timestamps();

        	$table->foreign('partners_info_id')->on('partners_info')->references('id')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
	    Schema::dropIfExists('partner_vip_plans');
    }
}
