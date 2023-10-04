<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Faq extends Migration
{
    /* FAQ */
    public function up()
    {
        Schema::create('faq', function (Blueprint $table) {
            $table->increments('id');

			//EVENT DATE & TIME
			$table->dateTime('faq_created');

			//RELATION:
			//#1 - GENERAL (FALSE, 0),
			//#2 - PARTNER (TRUE, 1)
			$table->boolean('relation')->default(0);

			//QUESTION:
			$table->string('question_en');

			//ANSWER:
			$table->string('answer_en');

            $table->string('question_fr');

            //ANSWER:
            $table->string('answer_fr');
        });
    }

    public function down()
    {
        Schema::dropIfExists('faq');
    }
}
