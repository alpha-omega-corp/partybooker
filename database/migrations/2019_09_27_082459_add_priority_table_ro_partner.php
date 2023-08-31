<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPriorityTableRoPartner extends Migration
{
	private $priorityList = [
		'exclusif' => 1,
		'premium' => 2,
		'standart' => 3,
		'commission' => 4,
		'basic' => 5,
	];

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('partners_info', function (Blueprint $table){
        	$table->integer('priority');
        });

        foreach ($this->priorityList as $plan => $priority){
        	\App\Models\PartnersInfo::where('plan', $plan)->update([
        		'priority' => $priority
	        ]);
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
	    Schema::table('partners_info', function (Blueprint $table){
		    $table->dropColumn('priority');
	    });
    }
}
