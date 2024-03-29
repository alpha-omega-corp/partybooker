<?php

use App\Models\AdvertRate;
use App\Models\AdvertSchedule;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('advert_services', function (Blueprint $table) {
            $table->id();
            $table->morphs('serviceable');
            $table->foreignIdFor(AdvertSchedule::class)->nullable();
            $table->foreignIdFor(AdvertRate::class)->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('advert_services');
    }
};
