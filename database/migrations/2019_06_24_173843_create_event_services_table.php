<?php

use App\Models\Company;
use App\Models\Services\Partials\ServiceCost;
use App\Models\Services\Partials\ServiceSchedule;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('event_services', function (Blueprint $table) {
            $table->increments('id');
            $table->foreignIdFor(Company::class);
            $table->foreignIdFor(ServiceCost::class);
            $table->foreignIdFor(ServiceSchedule::class);

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('event_services');
    }
};
