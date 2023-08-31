<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPlanIdFieldToPartnerInfo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('partners_info', function (Blueprint $table) {
        	$table->integer('plans_id')->unsigned()->after('plan')->nullable();
	        $table->foreign('plans_id')->references('id')->on('plans')->onDelete("SET NULL");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('partners_info', function (Blueprint $table) {
	        $table->dropForeign(['plans_id']);
	        $table->dropColumn('plans_id');
        });
    }
}
