<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCommissionFieldsToPartner extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('partners_info', function (Blueprint $table) {
            $table->integer('is_commission')->nullable();
            $table->integer('commission_amount')->nullable();
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
	        $table->dropColumn('is_commission');
	        $table->dropColumn('commission_amount');
        });
    }
}
