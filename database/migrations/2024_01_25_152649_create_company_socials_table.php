<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('company_socials', function (Blueprint $table) {
            $table->id();
            $table->string('www')->unique();
            $table->string('youtube');
            $table->string('instagram');
            $table->string('facebook');
            $table->string('tiktok');
            $table->string('twitter');
            $table->string('linkedin');
            $table->string('vimeo');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('company_socials');
    }
};
