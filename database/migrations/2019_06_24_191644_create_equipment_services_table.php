<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('equipment_services', function (Blueprint $table) {
            $table->increments('id');
            $table->string('id_partner', 30);
            $table->string('working_days');
            $table->string('working_time', 1000);
            $table->integer('price');
            $table->string('budget');
            $table->time('opening');
            $table->time('closing');
            $table->string('holidays', 350)->nullable();
            $table->string('extansion');
            $table->string('ext_true', 150)->nullable();
            $table->string('price_for', 100);
            $table->string('other_price', 100)->nullable();
            $table->string('paymeny', 300);
            $table->string('other_payment', 100)->nullable();
            $table->string('deposit', 300);
            $table->string('delivery', 300)->nullable();
            $table->string('expences', 300);
            $table->string('geo', 350);
            $table->string('complim_services', 500);
            $table->string('proposed', 500);
            $table->string('references', 350)->nullable();
            $table->string('comment', 500)->options();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('equipment_services');
    }
};
