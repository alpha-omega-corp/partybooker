<?php

use App\Models\AppPlan;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('app_plan_locales', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(AppPlan::class);
            $table->enum('lang', \App\Enums\Language::values());
            $table->string('name');
            $table->text('description');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('app_plan_locales');
    }
};
