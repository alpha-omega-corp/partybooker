<?php

use App\Models\AppPlan;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('request_partners', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(AppPlan::class);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('request_partners');
    }
};
