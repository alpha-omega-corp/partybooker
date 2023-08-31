<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddSocialNetworksTostatisticTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('statistics', function (Blueprint $table){
        	$table->integer('facebook')->default(0);
        	$table->integer('twitter')->default(0);
        	$table->integer('instagram')->default(0);
        	$table->integer('linkedin')->default(0);
        	$table->integer('vimeo')->default(0);
        	$table->integer('youtube')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
	    Schema::table('statistics', function (Blueprint $table) {
	    	$table->dropColumn('facebook');
	    	$table->dropColumn('twitter');
	    	$table->dropColumn('instagram');
	    	$table->dropColumn('linkedin');
	    	$table->dropColumn('vimeo');
	    	$table->dropColumn('youtube');
	    });
    }
}
