<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Blog extends Migration
{
    /* BLOG */
    public function up()
    {
        Schema::create('blog', function (Blueprint $table) {
            $table->increments('id');

            //EVENT DATE & TIME
            $table->string('post_id');

            $table->dateTime('created');
            $table->dateTime('updated');
            $table->dateTime('published');

            //STATUS:
            //#1 - PUBLISHED (TRUE, 1),
            //#2 - DRAFT (FALSE, 0)
            $table->boolean('status')->default(0);

            //TITLE EN:
            $table->string('title_en');

            //TITLE FR:
            $table->string('title_fr');

            //SLUG:
            $table->string('slug');

            //MAIN IMAGE:
            $table->string('main_img');

            //SECONDARY IMAGE
            $table->string('sec_img');

            //ARTICLE EN
            $table->text('article_en');

            //ARTICLE FR
            $table->text('article_fr');


        });
    }

    public function down()
    {
        Schema::dropIfExists('blog');
    }
}
