<?php

use App\Enums\AppAboutType;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('app_abouts', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->enum('type', AppAboutType::names());
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('app_abouts');
    }
};
