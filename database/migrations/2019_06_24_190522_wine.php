<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Wine extends Migration
{

    public function up(): void
    {
        Schema::create('wine', function (Blueprint $table) {
            $table->increments('id');
            $table->string('id_partner', 30);
            $table->string('working_days');
            $table->time('opening');
            $table->time('closing');
            $table->string('opening_upon');
            $table->integer('price');
            $table->string('budget', 100);
            $table->string('working_time', 1000);
            $table->string('holidays', 350)->nullable();
            $table->string('extansion');
            $table->string('ext_true', 150)->nullable();
            $table->string('price_for', 100);
            $table->string('other_price', 100)->nullable();
            $table->string('paymeny', 300);
            $table->string('other_payment', 100)->nullable();
            $table->string('deposit', 300);
            $table->string('service')->nullable(); //JSON
            $table->string('participant')->nullable(); //JSON
            $table->string('wine')->nullable(); //JSON
            $table->string('affiliation')->nullable(); //JSON
            $table->string('reward')->nullable(); //JSON
            $table->string('article', 500)->nullable();
            $table->string('art_d')->nullable(); //JSON
            $table->string('art_l')->nullable(); //JSON
            $table->string('furniture')->nullable(); //JSON
            $table->string('other_furniture')->nullable(); //JSON
            $table->string('equipment')->nullable(); //JSON
            $table->string('other_equipment')->nullable();
            $table->string('food_on_site');
            $table->string('yes_food', 350)->nullable();
            $table->string('catering');
            $table->string('caterer_aff')->nullable();
            $table->string('caterers_aff')->nullable(); //JSON
            $table->string('comment', 500)->options();
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('wine');
    }
}
