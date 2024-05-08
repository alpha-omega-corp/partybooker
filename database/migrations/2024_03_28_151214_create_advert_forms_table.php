<?php

use App\Models\AdvertService;
use App\Models\AppForm;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

    public function up(): void
    {
        Schema::create('advert_forms', function (Blueprint $table) {
            $table->foreignIdFor(AdvertService::class, 'advert_service_id');
            $table->foreignIdFor(AppForm::class, 'app_form_id');
            $table->primary(['advert_service_id', 'app_form_id']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('advert_forms');
    }
};
