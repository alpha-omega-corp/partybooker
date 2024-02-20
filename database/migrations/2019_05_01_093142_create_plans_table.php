<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('plans', function (Blueprint $table) {
            $table->id();
            $table->string('name', 15);
            $table->boolean('request');
            $table->boolean('video');
            $table->integer('price');
            $table->integer('advert_count');
            $table->integer('tag_count');
            $table->integer('uploads');
            $table->string('stripe_key')->nullable();

        });
    }

    public function down(): void
    {
        Schema::dropIfExists('plans');
    }
};
