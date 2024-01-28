<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('faqs', function (Blueprint $table) {
            $table->increments('id');
            $table->dateTime('faq_created');
            $table->boolean('relation')->default(0);
            $table->string('question_en');
            $table->string('answer_en');
            $table->string('question_fr');
            $table->string('answer_fr');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('faqs');
    }
};
