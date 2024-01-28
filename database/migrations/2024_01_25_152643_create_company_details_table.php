<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('company_details', function (Blueprint $table) {
            $table->id();
            $table->string('slogan_fr', 100);
            $table->string('slogan_en', 100);
            $table->text('short_fr');
            $table->text('short_en');
            $table->longText('full_fr');
            $table->longText('full_en');
            $table->string('seo_fr');
            $table->string('seo_en');
            $table->string('seo_title_fr');
            $table->string('seo_title_en');
            $table->string('seo_keywords_fr');
            $table->string('seo_keywords_en');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('company_details');
    }
};
