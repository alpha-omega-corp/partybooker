<?php

use App\Models\Partner;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('top_services', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Partner::class, 'id_partner');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('top_services');
    }
};
