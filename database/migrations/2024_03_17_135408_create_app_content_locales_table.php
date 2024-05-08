<?php

use App\Models\AppContent;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('app_content_locales', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(AppContent::class);
            $table->enum('lang', Language::values());
            $table->string('title');
            $table->text('content');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('app_content_locales');
    }
};
