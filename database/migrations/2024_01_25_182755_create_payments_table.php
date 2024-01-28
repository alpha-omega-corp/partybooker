<?php

use App\Enums\PaymentMethod;
use App\Models\Plan;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->enum('method', PaymentMethod::values());
            $table->foreignIdFor(Plan::class)->nullable();
            $table->date('accepted_at');
            $table->date('expires_at');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
