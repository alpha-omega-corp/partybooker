<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Caterer extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('caterers', function (Blueprint $table) {
			$table->increments('id');

			//SERVICE PROVIDER ID:
			$table->string('id_partner', 30);

			//WORKING SCHEDULE
			//Annual holidays
			$table->string('holidays', 350)->nullable();

			//Price
            $table->string('price_for', 250);

			//Payment methods
			$table->string('paymeny',300);
			$table->string('other_payment',100)->nullable();

			//Deposit on booking
			$table->string('deposit',300);

			//Payment terms & conditions
			$table->string('p_terms',1000)->nullable();

			//GENERAL INFO
			//Geographocal limit
			$table->string('geo',350);

			//Min/max guests
			$table->integer('min_guests');
			$table->integer('max_guests');

			//Smood.ch link
			$table->string('smood',100)->nullable();

			//SPECIALITIES
			//Specialities
			$table->string('specialities',1000);

			//Menu samples
			$table->string('menu',500)->nullable();

			//OTHER SERVICES
			//Logistic service
			$table->string('logistic')->nullable();

			//Staff
			$table->string('staff')->nullable();

			//Tableware
			$table->string('tableware')->nullable();

			//Furnishing equipment
			$table->string('furnishing')->nullable();

			//Decoration elements
			$table->string('decoration')->nullable();

			//Office
			$table->string('office')->nullable();

			//Other services
			$table->string('other_services',500)->nullable();

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
        Schema::dropIfExists('caterers');
    }
}
