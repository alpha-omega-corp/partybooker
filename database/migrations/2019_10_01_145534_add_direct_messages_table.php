<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddDirectMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('direct_messages', function (Blueprint $table){
        	$table->increments('id');
	        $table->integer('partners_info_id')->unsigned();
	        $table->string('partners_name');
        	$table->string('type');
        	$table->string('client_name')->nullable();
        	$table->string('client_email')->nullable();
        	$table->string('client_phone')->nullable();
        	$table->text('message')->nullable();
        	$table->text('data')->nullable();
        	$table->integer('status')->default(1);
        	$table->timestamp('created_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
	    Schema::dropIfExists('direct_messages');
    }
}
