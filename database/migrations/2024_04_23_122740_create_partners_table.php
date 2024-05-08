<?php

use App\Models\Company;
use App\Models\PartnerPayment;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('partners', function (Blueprint $table) {
            $table->uuid('id');
            $table->foreignIdFor(Company::class);
            $table->foreignIdFor(PartnerPayment::class);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('partners');
    }
};
