<?php

use App\Enums\AppContentType;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('app_contents', function (Blueprint $table) {
            $table->id();
            $table->enum('type', AppContentType::names());
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('app_contents');
    }
};
