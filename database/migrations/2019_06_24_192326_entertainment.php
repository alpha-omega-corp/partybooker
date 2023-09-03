<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Entertainment extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entertainment', function (Blueprint $table) {
            $table->increments('id');

			//SERVICE PROVIDER ID:
			$table->string('id_partner', 30);

			//WORKING SCHEDULE
			//Working days
			$table->string('working_days');

			//Duration
			$table->string('duration',200);

			//Annual holidays
			$table->string('holidays', 350)->nullable();

			//Extansion of basic schedule
			$table->boolean('extansion');
			$table->string('ext_true',150)->nullable();

			//RATES & CONDITIONS
			//Price
			$table->string('price_for',250);
            $table->string('other_price',250);

			//Budget
			$table->string('budget',100);

			//Payment methods
			$table->string('paymeny',300);
			$table->string('other_payment',100)->nullable();

			//Deposit on booking
			$table->string('deposit',300);

			//Travelling expenses
			$table->string('travelling_exp',300)->nullable();

			//Additional expenses
			$table->string('additional_exp',300)->nullable();

			//GENERAL INFO
			//Geografical limit
			$table->string('geo',350);

			//List of your services
			$table->string('services',350);

			//Number of participants
			$table->integer('participants');

			//Equipment provided
			$table->string('equipment',350);

			//Equipment not included
			$table->string('eq_not_incl',350)->nullable();

			//Biography
			$table->string('biography',1000);

			//Reference
			$table->string('reference',350)->nullable();

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
        Schema::dropIfExists('entertainment');
    }
}
