<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DropPartnersUniquePhone extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
	    Schema::table('partners_info', function(Blueprint $table)
	    {
		    $table->dropUnique('partners_info_phone_unique');

	    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
	    Schema::table('partners_info', function(Blueprint $table)
	    {
		    //Put the index back when the migration is rolled back
		    $table->unique('partners_info_phone_unique');

	    });
    }
}
