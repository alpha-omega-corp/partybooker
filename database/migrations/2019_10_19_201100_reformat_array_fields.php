<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ReformatArrayFields extends Migration
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
		    $ss = \App\Models\Wine::all();
		    foreach ($ss as $ep) {
			    $list = [];
			    foreach ($ep->service as $service) {
				    list($name, $description) = explode(',',  $service);
				    $n = explode(':', $name);
				    $d = explode(':', $description);
				    $list[] = [
					    'name' => trim($n[1]),
					    'description' => trim($d[1])
				    ];
			    }
			    \App\Models\Wine::where('id', $ep->id)->update([
				    'service' => json_encode($list)
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
