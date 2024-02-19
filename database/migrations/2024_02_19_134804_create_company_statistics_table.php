<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('company_statistics', function (Blueprint $table) {
            $table->id();
            $table->integer('email')->default(0);
            $table->integer('phone')->default(0);
            $table->integer('requests')->default(0);
            $table->integer('website')->default(0);
            $table->integer('address')->default(0);
            $table->integer('instagram')->default(0);
            $table->integer('facebook')->default(0);
            $table->integer('youtube')->default(0);
            $table->integer('twitter')->default(0);
            $table->integer('linkedin')->default(0);
            $table->integer('vimeo')->default(0);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('company_statistics');
    }
};
