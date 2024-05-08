<?php

use App\Models\AppFaq;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('app_faq_locales', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(AppFaq::class);
            $table->enum('lang', Language::values());
            $table->string('question');
            $table->text('answer');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('app_faq_locales');
    }
};
