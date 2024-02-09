<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('listing_prices', function (Blueprint $table) {
            $table->id();
            $table->json('payment_methods');
            $table->json('price_specs');
            $table->json('delivery_specs')->nullable();
            $table->json('deposit_specs')->nullable();
            $table->integer('budget')->nullable();

        });
    }

    public function down(): void
    {
        Schema::dropIfExists('listing_prices');
    }
};
