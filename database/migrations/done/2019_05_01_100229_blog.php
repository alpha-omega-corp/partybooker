<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Blog extends Migration
{
    /* BLOG */
    public function up()
    {
        Schema::create('blog', function (Blueprint $table) {
            $table->increments('id');
			
			//EVENT DATE & TIME
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
			$table->string('main_image_url');
			
			//SECONDARY IMAGE
			$table->string('sec_image_url');
			
			//ARTICLE EN
			$table->string('article_en');
			
			//ARTICLE FR
			$table->string('article_fr');
			
        });
    }

    public function down()
    {
        Schema::dropIfExists('blog');
    }
}
