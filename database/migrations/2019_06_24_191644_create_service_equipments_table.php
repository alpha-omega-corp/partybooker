<?php

use App\Enums\GeoLimit;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('service_equipments', function (Blueprint $table) {
            $table->id();
            $table->enum('geo_limit', GeoLimit::values())->nullable();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('service_equipments');
    }
};
