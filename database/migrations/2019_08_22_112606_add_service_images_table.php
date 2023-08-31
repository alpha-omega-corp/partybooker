<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddServiceImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service_images', function (Blueprint $table){
        	$table->increments('id');
        	$table->integer('partners_info_id')->unsigned();
        	$table->string('id_partner');
        	$table->string('category');
        	$table->string('image_name');
        	$table->integer('is_main')->nullable();

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
        Schema::dropIfExists('service_images');
    }
}
