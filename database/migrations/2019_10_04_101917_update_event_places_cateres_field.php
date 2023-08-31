<?php

use App\Models\EventPlace;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateEventPlacesCateresField extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
	    $services = EventPlace::all();
	    foreach ($services as $service) {
	    	$list = [];
		    $caterers = json_decode($service->yes_af_caterers);
		    foreach ($caterers as $c){
		    	$temp = explode(',', $c);
				$list[] = [
					'name' => trim(str_replace('caterer:','',$temp[0])),
					'url' => isset($temp[1]) ? trim(str_replace('url:','',$temp[1])) : '',
				];
		    }
		    EventPlace::where('id', $service->id)->update(['yes_af_caterers' => json_encode($list)]);
	    }
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
