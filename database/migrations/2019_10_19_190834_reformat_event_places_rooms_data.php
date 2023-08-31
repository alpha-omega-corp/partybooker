<?php

use App\Models\EventPlace;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ReformatEventPlacesRoomsData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    	\DB::beginTransaction();
    	try {
		    $ss = EventPlace::all();
		    foreach ($ss as $ep) {
			    $list = [];
			    foreach ($ep->room as $room) {
				    list($name, $capacity) = explode('capacity', $room);
				    $name = str_replace('name:', '', $name);
				    $list[] = [
					    'name' => rtrim(trim($name), ','),
					    'capacity' => trim(str_replace(':', '', $capacity))
				    ];
			    }
			    EventPlace::where('id', $ep->id)->update([
				    'room' => json_encode($list)
			    ]);
		    }
	    }catch (Exception $e){
    		\DB::rollBack();
	    }

	    \DB::commit();
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
