<?php

use App\Models\AppAbout;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('app_about_locales', function (Blueprint $table) {
            $table->id();
            $table->enum('lang', Language::values());
            $table->foreignIdFor(AppAbout::class);
            $table->string('title');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('app_about_locales');
    }
};
