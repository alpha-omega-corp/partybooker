<?php

use App\Models\AdvertService;
use App\Models\AdvertStatistic;
use App\Models\Category;
use App\Models\Company;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('adverts', function (Blueprint $table) {
            $table->id();
            $table->string('slug');
            $table->foreignIdFor(Category::class);
            $table->foreignIdFor(Company::class);
            $table->foreignIdFor(AdvertService::class);
            $table->foreignIdFor(AdvertStatistic::class);
            $table->boolean('is_public')->default(false);
            $table->boolean('is_main')->default(false);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('adverts');
    }
};
