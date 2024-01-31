<?php

use App\Models\Advert;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('advert_images', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Advert::class);
            $table->boolean('is_thumbnail')->default(false);
            $table->string('path');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('advert_images');
    }
};
