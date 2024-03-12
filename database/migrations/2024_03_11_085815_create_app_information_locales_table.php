<?php

use App\Enums\Language;
use App\Models\AppInformation;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('app_information_locales', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(AppInformation::class);
            $table->enum('lang', Language::values());
            $table->string('title');
            $table->text('content');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('app_information_locales');
    }
};
