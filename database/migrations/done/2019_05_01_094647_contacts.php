<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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

            //LINKEDIN:
            $table->string('linkedin')->nullable();


            //GOOGLE+:
            $table->string('googleplus')->nullable();

            //TWITTER:
            $table->string('twitter')->nullable();

            //INSTAGRAM:
            $table->string('instagram')->nullable();

            $table->longText('user_terms_en');
            $table->longText('service_terms_en');

            $table->longText('user_terms_fr');
            $table->longText('service_terms_fr');
        });
    }

    public function down()
    {
        Schema::dropIfExists('settings');
    }
}
