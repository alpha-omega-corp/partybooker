<?php

use App\Models\AppAbout;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('app_about_items', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(AppAbout::class);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('app_about_items');
    }
};
