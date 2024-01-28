<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('service_schedules', function (Blueprint $table) {
            $table->id();
            $table->json('timetable');
            $table->json('holidays');
            $table->boolean('has_extension')->default(false);
            $table->json('extension_specs')->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('service_schedules');
    }
};
