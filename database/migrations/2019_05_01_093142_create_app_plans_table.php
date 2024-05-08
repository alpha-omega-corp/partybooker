<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('app_plans', function (Blueprint $table) {
            $table->id();
            $table->string('code');
            $table->string('color');
            $table->integer('price');
            $table->integer('upload_count');
            $table->integer('advert_count');
            $table->integer('tag_count');
            $table->boolean('has_requests');
            $table->boolean('has_videos');

            $table->string('stripe_key')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('app_plans');
    }
};
