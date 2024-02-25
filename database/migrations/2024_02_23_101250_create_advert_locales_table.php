<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('advert_locales', function (Blueprint $table) {
            $table->id();
            $table->morphs('translatable');
            $table->string('lang');
            $table->string('title');
            $table->string('description');
            $table->json('keywords');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('advert_locales');
    }
};
