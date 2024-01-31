<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('service_costs', function (Blueprint $table) {
            $table->id();
            $table->json('prices');
            $table->json('payment_methods');
            $table->integer('budget')->nullable();

            $table->boolean('has_deposit')->default(false);
            $table->boolean('has_delivery')->default(false);
            $table->boolean('has_extra')->default(false);

            $table->json('extra_specs')->nullable();
            $table->json('delivery_specs')->nullable();
            $table->json('deposit_specs')->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('service_costs');
    }
};
