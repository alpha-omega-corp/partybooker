<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddVipPlanCategoriesMap extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('partner_vip_plan_categories', function (Blueprint $table){
        	$table->increments('id');
        	$table->integer('partner_vip_plans_id')->unsigned();
        	$table->string('category');
        	$table->timestamps();

        	$table->foreign('partner_vip_plans_id')->on('partner_vip_plans')->references('id')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('partner_vip_plan_categories');
    }
}
