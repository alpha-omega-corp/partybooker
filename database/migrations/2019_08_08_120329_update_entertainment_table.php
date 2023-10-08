<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;

class UpdateEntertainmentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
	    Schema::table('entertainment', function ($table) {
		    $table->string('price_for', 1000)->change();
		    $table->string('other_price', 1000)->change();
		    $table->string('deposit', 1000)->change();
	    });

	    Schema::table('partners_info', function ($table) {
		    $table->string('fr_short_descr', 1500)->change();
		    $table->string('en_short_descr', 1500)->change();
	    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
	    Schema::table('entertainment', function ($table) {
		    $table->string('price_for', 100)->change();
		    $table->string('other_price', 100)->change();
		    $table->string('deposit', 300)->change();
		    $table->string('biography', 2000)->change();
		    $table->string('reference', 350)->change();
	    });

	    Schema::table('partners_info', function ($table) {
		    $table->string('fr_short_descr', 350)->change();
		    $table->string('en_short_descr', 350)->change();
	    });
    }
}
