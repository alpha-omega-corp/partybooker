<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('service_images', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->boolean('thumbnail')->default(false);
            $table->string('alt_fr')->nullable();
            $table->string('alt_en')->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('service_images');
    }
};
