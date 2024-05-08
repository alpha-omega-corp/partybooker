<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

    public function up(): void
    {
        Schema::create('advert_schedules', function (Blueprint $table) {
            $table->id();
            $table->boolean('has_extension')->default(false);
            $table->string('extension_description')->nullable();
            $table->json('holidays')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('advert_schedules');
    }
};
