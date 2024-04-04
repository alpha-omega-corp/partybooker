<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('service_caterers', function (Blueprint $table) {
            $table->id();
            $table->integer('max_guests')->nullable();
            $table->integer('min_guests')->nullable();
            $table->text('specialty')->nullable();
            $table->json('delivery_services')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('service_caterers');
    }
};
