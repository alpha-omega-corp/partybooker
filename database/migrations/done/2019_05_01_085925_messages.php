<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Messages extends Migration
{
    /* MESSAGES FORM ALL CONTACT FORMS */
    public function up()
    {
        Schema::create('messages', function (Blueprint $table) {
            $table->increments('id');
			
			//EVENT DATE & TIME
			$table->dateTime('message_sent');
			
			//STATUS:
			//#1 - unread (FALSE, 0),
			//#2 - read (TRUE, 1)
			$table->boolean('status')->default(0);
			
			//CONTACT FORMS: 
			//#1 - Subscribe form, 
			//#2 - Ask your question (FAQ), 
			//#3 - Contact form (Contact us page),
			//#4 - Contact form (Contacts tab in Partner CP),
			//#5 - Leave your phone number (Become a partner page),
			//#6 - Direct request (Service page)
			$table->string('contact_form');
			
			//NAME:
			$table->string('name', 15)->nullable();
			
			//EMAIL:
			$table->string('email')->nullable();
			
			//TELEPHONE:
			$table->string('phone', 20)->nullable();
			
			//MESSAGES/QUESTION:
			$table->string('message', 200)->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('messages');
    }
}
