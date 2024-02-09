<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('messages', function (Blueprint $table) {
            $table->increments('id');
            $table->dateTime('message_sent');
            $table->boolean('status')->default(0);

            //CONTACT FORMS:
            //#1 - Subscribe form,
            //#2 - Ask your question (FAQ),
            //#3 - Contact form (Contact us page),
            //#4 - Contact form (Contacts tab in Partner CP),
            //#5 - Leave your phone number (Become a partner page),
            //#6 - Direct request (AdvertService page)
            $table->string('contact_form');
            $table->string('name', 15)->nullable();
            $table->string('email')->nullable();
            $table->string('email_to')->nullable();
            $table->string('id_partner')->nullable();
            $table->string('phone', 20)->nullable();
            $table->string('message', 200)->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('messages');
    }
};
