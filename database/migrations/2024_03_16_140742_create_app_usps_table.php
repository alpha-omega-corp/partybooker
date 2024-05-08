<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('app_usps', function (Blueprint $table) {
            $table->id();
            $table->integer('position');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('app_usps');
    }
};
