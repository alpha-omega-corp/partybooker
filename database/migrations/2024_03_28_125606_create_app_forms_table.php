<?php

use App\Enums\FormType;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

    public function up(): void
    {
        Schema::create('app_forms', function (Blueprint $table) {
            $table->id();
            $table->enum('type', FormType::names());
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('app_forms');
    }
};
