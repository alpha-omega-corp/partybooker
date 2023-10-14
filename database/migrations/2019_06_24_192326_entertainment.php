<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->string('id_partner', 30);
            $table->string('working_days');
            $table->string('duration');
            $table->time('opening');
            $table->time('closing');
            $table->string('holidays', 350)->nullable();
            $table->string('price_for', 250);
            $table->string('other_price', 250);
            $table->string('extansion');
            $table->string('ext_true', 150)->nullable();
            $table->string('paymeny', 300);
            $table->string('other_payment', 100)->nullable();
            $table->string('deposit', 300);
            $table->string('travelling_exp', 300)->nullable();
            $table->string('additional_exp', 300)->nullable();
            $table->string('geo', 350);
            $table->string('services', 350);
            $table->integer('participants');
            $table->string('equipment', 350)->nullable();
            $table->string('eq_not_incl')->nullable();
            $table->string('biography', 350)->nullable();
            $table->string('reference', 350)->nullable();
            $table->string('comment', 500)->options();
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
