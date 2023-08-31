<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ReceptionVenue extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
		//FOR RECEPTION VENUE & BUSINESS EVENTS CATEGORIES
        Schema::create('event_places', function (Blueprint $table) {
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
			
			//GENERAl INFO
			//Cocktail reception - standing capacity
			$table->integer('coctail');
			
			//Banquet capacity
			$table->integer('banquet');
			
			//Outdoor facility
			$table->integer('outdoor');
			
			//Sitting schema
			$table->string('sitting',100);
			
			//Conference room include room name + capacity
			$table->string('room',300);
			
			//Reduced mobility access
			$table->integer('reduced_mob');
			
			//Car park
			$table->integer('car')->nullable();
			
			//Bar, dance floor
			$table->string('facilities',300);
			$table->string('oth_facilities',100);
			
			//Convenience
			$table->integer('convenience');
			
			//Possibilty of bringing wine
			$table->boolean('alcohole');
			$table->string('alcohole_yes',300);
			
			//CATERING - STEWARDSHIP
			//Catering options
			//prepare meal?
			$table->boolean('meals');
			
			//affiliated caterers
			$table->boolean('affiliate_caterer');
			$table->string('yes_af_caterers',1000)->nullable(); //JSON
			
			//free choice of caterer
			$table->boolean('free_caterer');
			$table->string('yes_free_caterers',1000)->nullable(); //JSON
			
			//external food
			$table->boolean('ext_food');
			
			//Available furniture
			$table->string('furniture',300);
			
			//Technical equipment
			$table->string('equipment',300);
			$table->string('other_eq',300)->nullable();
			
			//OTHER SERVICES
			//Staff
			$table->string('staff',400);
			$table->string('other_staff',300)->nullable();
			
			//Accomodation
			$table->integer('accomodation');
			$table->integer('number_questrooms')->nullable();
			
			//Other
			$table->string('other_services',400)->nullable();
			$table->string('more_services',400)->nullable();
			
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
        Schema::dropIfExists('event_places');
	}
}
