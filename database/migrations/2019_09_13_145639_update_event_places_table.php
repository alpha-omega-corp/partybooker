<?php

use App\Models\EventPlace;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateEventPlacesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('event_places', function (Blueprint $table){
	        $table->string('opening')->nullable()->default(null)->change();
	        $table->string('closing')->nullable()->default(null)->change();
	        $table->text('working_time')->nullable()->after('closing');
        });

        EventPlace::whereNull('working_time')->update(['working_time' => '[]']);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
	    Schema::table('event_places', function (Blueprint $table){
		    $table->dropColumn('working_time');
	    });
    }
}
