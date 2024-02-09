<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('listing_details', function (Blueprint $table) {
            $table->id();
            $table->json('staff')->nullable();
            $table->json('rooms')->nullable();
            $table->json('furniture')->nullable();
            $table->json('equipment')->nullable();
            $table->json('facilities')->nullable();
            $table->json('conveniences')->nullable();
            $table->boolean('has_handicap')->default(false);
            $table->boolean('has_parking')->default(false);
            $table->integer('parking_slots')->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('listing_details');
    }
};
