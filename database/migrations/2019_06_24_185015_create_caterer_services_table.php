<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('caterer_services', function (Blueprint $table) {
            $table->increments('id');
            $table->string('id_partner', 30);
            $table->string('holidays', 350)->nullable();
            $table->integer('price');
            $table->string('budget', 250);
            $table->string('price_for', 250);
            $table->string('paymeny', 300);
            $table->string('other_payment', 100)->nullable();
            $table->string('deposit', 300);
            $table->string('p_terms', 1000)->nullable();
            $table->string('geo', 350);
            $table->integer('min_guests');
            $table->integer('max_guests');
            $table->string('smood', 100)->nullable();
            $table->string('specialities', 1000);
            $table->string('menu', 500)->nullable();
            $table->string('logistic')->nullable();
            $table->string('staff')->nullable();
            $table->string('tableware')->nullable();
            $table->string('furnishing')->nullable();
            $table->string('decoration')->nullable();
            $table->string('office')->nullable();
            $table->string('other_services', 500)->nullable();
            $table->string('comment', 500)->options();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('caterer_services');
    }
};
