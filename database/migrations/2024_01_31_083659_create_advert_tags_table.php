<?php

use App\Models\Advert;
use App\Models\CategoryTag;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('advert_tags', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Advert::class);
            $table->foreignIdFor(CategoryTag::class);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('advert_tags');
    }
};
