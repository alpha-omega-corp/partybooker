<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Equipment extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equipment', function (Blueprint $table) {
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
			$table->string('price_for',100);
			$table->string('other_price',100)->nullable();

			//Payment methods
			$table->string('paymeny',300);
			$table->string('other_payment',100)->nullable();

			//Deposit on booking
			$table->string('deposit',300);

			//Delivery charge
			$table->string('delivery',300);

			//Additional expences
			$table->string('expences',300);

			//GENERAL INFO
			//Geographical limits
			$table->string('geo',350);

			//Complimentary services
			$table->string('complim_services',500);

			//Proposed equipment
			$table->string('proposed',500);

			//References
			$table->string('references',350)->nullable();

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
        Schema::dropIfExists('equipment');
    }
}
