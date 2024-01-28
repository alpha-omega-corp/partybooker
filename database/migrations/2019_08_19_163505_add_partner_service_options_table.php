<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('partner_plan_options', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('partners_info_id')->unsigned();
            $table->integer('categories_count');
            $table->integer('sub_categories_count');
            $table->integer('extra')->nullable();
            $table->integer('active')->nullable();
        });
    }

    public function down(): void
    {
        Schema::table('partner_plan_options', function (Blueprint $table) {
            $table->dropForeign('partners_info_id_partner');
            $table->dropIfExists();
        });
    }
};
