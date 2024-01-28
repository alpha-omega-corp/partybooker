<?php

use App\Models\Category;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('category_locales', function (Blueprint $table) {
            $table->foreignIdFor(Category::class);
            $table->string('lang');
            $table->string('name');

            $table->primary(['category_id', 'lang']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('category_locales');
    }
};
