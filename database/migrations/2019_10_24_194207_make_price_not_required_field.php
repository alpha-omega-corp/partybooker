<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MakePriceNotRequiredField extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('wine', function (Blueprint $table){
        	$table->string('price_for')->nullable()->change();
        });

	    Schema::table('event_places', function (Blueprint $table){
		    $table->string('price_for')->nullable()->change();
	    });

	    Schema::table('equipment', function (Blueprint $table){
		    $table->string('price_for')->nullable()->change();
	    });

	    Schema::table('caterers', function (Blueprint $table){
		    $table->string('price_for')->nullable()->change();
	    });

	    Schema::table('entertainment', function (Blueprint $table){
		    $table->string('price_for')->nullable()->change();
	    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
