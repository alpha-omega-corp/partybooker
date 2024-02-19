<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('company_addresses', function (Blueprint $table) {
            $table->id();
            $table->string('address');
            $table->string('lat');
            $table->string('lon');
            $table->string('loc');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('company_addresses');
    }
};
