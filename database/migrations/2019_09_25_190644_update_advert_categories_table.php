<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateAdvertCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('advert_categories', function (Blueprint $table){
        	$table->integer('sub_category_id');
        	$table->integer('partners_info_id');
        	$table->string('id_partner');
        	$table->dropColumn('advert_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
	    Schema::table('advert_categories', function (Blueprint $table){
		    $table->dropColumn('sub_category_id');
		    $table->dropColumn('partners_info_id');
		    $table->dropColumn('id_partner');
		    $table->integer('advert_id');
	    });
    }
}
