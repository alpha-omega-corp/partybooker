<?php

use App\Enums\Days;
use App\Models\AdvertSchedule;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('advert_schedule_days', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(AdvertSchedule::class)->constrained()->cascadeOnDelete();
            $table->enum('day', Days::values());
            $table->boolean('is_open')->default(false);
            $table->json('timetable')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('advert_schedule_days');
    }
};
