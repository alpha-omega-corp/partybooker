<?php

use App\Models\PlanOption;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('plans', function (Blueprint $table) {
            $table->id();
            $table->string('name', 15);
            $table->integer('price');
            $table->integer('uploads');
            $table->boolean('request');
            $table->boolean('video');
            $table->string('stripe_key')->nullable();
            $table->foreignIdFor(PlanOption::class);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('plans');
    }
};
