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
            $table->string('holidays', 350)->nullable();
            $table->string('extansion');
            $table->string('ext_true', 150)->nullable();
            $table->string('price_for', 100);
            $table->string('other_price', 100)->nullable();
            $table->string('paymeny', 300);
            $table->string('other_payment', 100)->nullable();
            $table->string('deposit', 300);
            $table->mediumText('service'); //JSON
            $table->mediumText('participant'); //JSON
            $table->mediumText('wine'); //JSON
            $table->mediumText('affiliation')->nullable(); //JSON
            $table->mediumText('reward')->nullable(); //JSON
            $table->mediumText('article')->nullable(); //JSON
            $table->mediumText('art_d')->nullable(); //JSON
            $table->mediumText('art_l')->nullable(); //JSON
            $table->mediumText('furniture');
            $table->mediumText('other_furniture')->nullable();
            $table->mediumText('equipment');
            $table->mediumText('other_equipment')->nullable();
            $table->string('food_on_site');
            $table->string('yes_food', 350)->nullable();
            $table->string('catering');
            $table->string('caterer_aff');
            $table->mediumText('caterers_aff')->nullable();
            $table->string('comment', 500)->options();
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('wine');
    }
}
