<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('company_medias', function (Blueprint $table) {
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

    public function down(): void
    {
        Schema::dropIfExists('company_medias');
    }
};
