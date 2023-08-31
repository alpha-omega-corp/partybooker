<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table){
        	$table->increments('id');
        	$table->integer('parent_id')->nullable();
        	$table->string('code');
        	$table->string('url')->nullable();
        });

	    Schema::create('category_locales', function (Blueprint $table){
		    $table->integer('categories_id')->unsigned();
		    $table->string('lang',3);
		    $table->string('name');

		    $table->primary(['categories_id', 'lang']);
		    $table->foreign('categories_id')->on('categories')->references('id')->onDelete('cascade');
	    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
	    Schema::dropIfExists('categories');
	    Schema::dropIfExists('category_locales');
    }
}
