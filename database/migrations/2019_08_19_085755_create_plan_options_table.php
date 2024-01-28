<?php

use App\Models\Plan;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('plan_options', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('categories');
            $table->integer('children');
            $table->foreignIdFor(Plan::class);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('plan_options');
    }
};
