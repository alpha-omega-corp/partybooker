<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('listing_schedules', function (Blueprint $table) {
            $table->id();
            $table->json('timetable_specs');
            $table->json('holiday_specs')->nullable();
            $table->json('extension_specs')->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('listing_schedules');
    }
};
