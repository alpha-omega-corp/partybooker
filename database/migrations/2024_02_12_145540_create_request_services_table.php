<?php

use App\Models\Advert;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('request_services', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Advert::class);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('request_services');
    }
};
