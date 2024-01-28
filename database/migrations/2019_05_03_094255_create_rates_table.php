<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('rates', function (Blueprint $table) {
            $table->increments('id');
            $table->dateTime('rated');
            $table->string('id_partner', 30);
            $table->string('user_email');
            $table->integer('rate');
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('rates');
    }
};
