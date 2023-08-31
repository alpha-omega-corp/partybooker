<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPaymentTransactionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
	    Schema::create('payment_transactions', function (Blueprint $table) {
	    	$table->increments('id');
	    	$table->integer('plan_id');
	    	$table->string("payment_id");
	    	$table->string("partner_id");
	    	$table->string("amount");
	    	$table->string("status", 30);
	    	$table->text("message")->nullable();
	    	$table->timestamps();
	    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists("payment_transactions");
    }
}
