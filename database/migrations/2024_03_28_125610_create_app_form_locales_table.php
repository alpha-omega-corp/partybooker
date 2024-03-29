<?php

use App\Models\AppForm;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

    public function up(): void
    {
        Schema::create('app_form_locales', function (Blueprint $table) {
            $table->id();
            $table->enum('lang', Language::values());
            $table->foreignIdFor(AppForm::class);
            $table->string('label');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('app_form_locales');
    }
};
