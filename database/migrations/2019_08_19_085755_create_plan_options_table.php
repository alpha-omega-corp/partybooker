<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('plan_options', function (Blueprint $table) {
            $table->id();
            $table->integer('advert_count');
            $table->integer('tag_count');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('plan_options');
    }
};
