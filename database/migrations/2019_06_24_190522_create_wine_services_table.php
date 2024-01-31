<?php

use App\Models\Services\Partials\ServiceCommon;
use App\Models\Services\Partials\ServiceCost;
use App\Models\Services\Partials\ServiceSchedule;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('wine_services', function (Blueprint $table) {
            $table->increments('id');
            $table->foreignIdFor(ServiceCost::class);
            $table->foreignIdFor(ServiceSchedule::class);
            $table->foreignIdFor(ServiceCommon::class);
            $table->timestamps();
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('wine_services');
    }
};
