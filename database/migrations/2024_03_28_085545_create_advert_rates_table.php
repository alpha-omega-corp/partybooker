<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

    public function up(): void
    {
        Schema::create('advert_rates', function (Blueprint $table) {
            $table->id();
            $table->json('prices')->nullable();
            $table->string('budget')->nullable();
            $table->boolean('has_deposit')->default(false);
            $table->string('deposit_description')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('advert_rates');
    }
};
