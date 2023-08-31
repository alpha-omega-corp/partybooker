<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Contacts extends Migration
{
    /* PARTYBOOKER CONTACTS */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->increments('id');
			
			//ADDRESS:
			$table->string('address');
			
			//EMAIL:
			$table->string('email');
			
			//TELEPHONE:
			$table->string('phone', 20);
			
			//FACEBOOK:
			$table->string('facebook')->nullable();
			
			//GOOGLE+:
			$table->string('googleplus')->nullable();
			
			//TWITTER:
			$table->string('twitter')->nullable();
			
			//INSTAGRAM:
			$table->string('instagram')->nullable();
			
			//USER TERMS & CONDITIONS
			$table->string('user_terms');
			
			//SERVICE PROVIDER TERMS & CONDITIONS
			$table->string('service_terms');
        });
    }

    public function down()
    {
        Schema::dropIfExists('settings');
    }
}
