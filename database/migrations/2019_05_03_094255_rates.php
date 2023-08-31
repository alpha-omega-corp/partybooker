<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Rates extends Migration
{
    /* RATES */
    public function up()
    {
        Schema::create('rates', function (Blueprint $table) {
            $table->increments('id');
			
			//EVENT DATE & TIME
			$table->dateTime('rated');
						
			//SERVICE PROVIDER ID: 
			$table->string('id_partner', 30);
			
			//RATE (number of stars):
			$table->integer('rate');
		});
    }

    
    public function down()
    {
		Schema::dropIfExists('rates');
    }
}
