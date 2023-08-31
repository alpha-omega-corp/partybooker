<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Events extends Migration
{
    /* NOTIFICATIONS IN PARTYBOOKER ADMIN CP */
    public function up()
    {
        Schema::create('notification', function (Blueprint $table) {
            $table->increments('id');
			
			//EVENT DATE & TIME
			$table->dateTime('event_date');
			
			//EVENTS: 
			//#1 - service provider registration, 
			//#2 - simple user registration, 
			//#3 - rating
			$table->string('event');
			
			//DESCRIPTION:
			//#1 - "New service provider: NAME, ID",
			//#2 - "New user: NAME, EMAIL",
			//#3 - "Rated SERVICE PROVIDER NAME: RATE" (i.e. number of stars)
            $table->string('description');
			
        });
    }

    public function down()
    {
        Schema::dropIfExists('notification');
    }
}
