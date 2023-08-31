<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Wine extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wine', function (Blueprint $table) {
			$table->increments('id');
			
			//SERVICE PROVIDER ID: 
			$table->string('id_partner', 30);
			
			//WORKING SCHEDULE
			//Working days
			$table->string('working_days');
			
			//Opening time
			$table->time('opening');
			
			//Closing time
			$table->time('closing');
			
			//Opening upon appointment
			$table->boolean('opening_upon');
			
			//Annual holidays
			$table->string('holidays', 350)->nullable();
			
			//Extansion of basic schedule
			$table->boolean('extansion');
			$table->string('ext_true',150)->nullable();
			
			//RATES & CONDITIONS
			//Price
			$table->integer('price');
			$table->string('price_for',100);
			$table->string('other_price',100)->nullable();
			
			//Budget
			$table->string('budget',100);
			
			//Payment methods
			$table->string('paymeny',300);
			$table->string('other_payment',100)->nullable();
			
			//Deposit on booking
			$table->string('deposit',300);
			
			//GENERAL INFO
			//Service name
			$table->mediumText('service'); //JSON
			
			//Participant capacity
			$table->mediumText('capacity'); //JSON
			
			//Wine description
			$table->mediumText('wine'); //JSON
			
			//Affiliations
			$table->mediumText('affiliations')->nullable(); //JSON
			
			//Rewards
			$table->mediumText('rewards')->nullable(); //JSON
			
			//Article
			$table->mediumText('article')->nullable(); //JSON
			
			//Available furniture & equipment
			$table->mediumText('furniture');
			
			//Technical equipment
			$table->mediumText('equipment');
			
			//FOOD & SERVICE INFO
			//Food on site
			$table->boolean('food_on_site');
			$table->string('yes_food',350)->nullable();
			
			//Catering service available
			$table->boolean('catering');
			
			//Caterer affiliation
			$table->boolean('caterer_aff');
			$table->mediumText('caterers_aff')->nullable();
			
			//COMMENT
			$table->string('comment',500)->options();
		});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::dropIfExists('wine');
    }
}
