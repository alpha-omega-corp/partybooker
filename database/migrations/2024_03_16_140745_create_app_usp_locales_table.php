<?php

use App\Models\AppUsp;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {


    public function up(): void
    {
        Schema::create('app_usp_locales', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(AppUsp::class);
            $table->enum('lang', \App\Enums\Language::values());
            $table->string('title');
            $table->text('description');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('app_usp_locales');
    }
};
