<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Plans extends Migration
{
    /* PARTYBOOKER YEARLY PLANS */
    public function up()
    {
        Schema::create('plans', function (Blueprint $table) {
            $table->increments('id');
			
			//PLAN CREATED
			$table->dateTime('plan_created');
			
			//NAME: 
			//#1 - STANDART, 
			//#2 - PREMIUM, 
			//#3 - EXCLUSIF
			$table->string('name',15);
			
			//POSITION:
			//#1 - "after PREMIUM",
			//#2 - "after EXCLUSIF",
			//#3 - "First"
            $table->string('position', 20);
			
			//VISIBILITY IN LISTINGS
			//#1 - "1 category (1 subcategory)",
			//#2 - "1 category (2 subcategories)",
			//#3 - "2 categories (1 subcategory in each)",
			//#4 - "1 category (3 subcategories)",
			//#5 - "2 categories (2 subcategories in 1st, 1 subcategory in 2nd)",
			//#6 - "3 categories (1 subcategory in each)"
			$table->string('listing', 100);
			
			//NUMBER OF PHOTOS PER SUBCATEGORY
			$table->integer('photos_num');
			
			//POSSIBILITY OF VIDEO UPLOADING
			//#1 - Available (TRUE, 1),
			//#2 - Not available (FALSE, 0)
			$table->boolean('video');
			
			//POSSIBILITY OF DIRECT REQUEST
			//#1 - Available (TRUE, 1),
			//#2 - Not available (FALSE, 0)
			$table->boolean('direct_request');
			
			//PRICE
			$table->integer('price');
        });
    }

    public function down()
    {
        Schema::dropIfExists('plans');
    }
}
