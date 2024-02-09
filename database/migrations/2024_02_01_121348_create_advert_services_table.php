<?php

use App\Models\ListingDetail;
use App\Models\ListingPrice;
use App\Models\ListingSchedule;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('advert_services', function (Blueprint $table) {
            $table->id();
            $table->morphs('serviceable');
            $table->foreignIdFor(ListingPrice::class);
            $table->foreignIdFor(ListingSchedule::class);
            $table->foreignIdFor(ListingDetail::class);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('advert_services');
    }
};
