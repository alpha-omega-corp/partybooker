<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('notifications', function (Blueprint $table) {
            $table->increments('id');
            $table->dateTime('event_date');
            $table->string('event');
            $table->string('description');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('notifications');
    }
};
