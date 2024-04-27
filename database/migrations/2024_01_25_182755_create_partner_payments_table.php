<?php

use App\Enums\PaymentType;
use App\Models\AppPlan;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('partner_payments', function (Blueprint $table) {
            $table->id();
            $table->enum('type', PaymentType::values());
            $table->foreignIdFor(AppPlan::class);
            $table->dateTime('accepted_at');
            $table->dateTime('expires_at');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('partner_payments');
    }
};
