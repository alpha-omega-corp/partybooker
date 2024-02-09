<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('partner_tags', function (Blueprint $table) {
            $table->foreignId('partners_info_id');
            $table->foreignId('event_type_id');
            $table->primary(['partners_info_id', 'event_type_id']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('partner_tags');
    }
};
