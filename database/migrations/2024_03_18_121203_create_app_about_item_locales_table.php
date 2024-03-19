<?php

use App\Models\AppAboutItem;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('app_about_item_locales', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(AppAboutItem::class);
            $table->enum('lang', Language::values());
            $table->text('content');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('app_about_item_locales');
    }
};
