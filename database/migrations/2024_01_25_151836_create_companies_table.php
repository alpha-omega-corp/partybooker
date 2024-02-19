<?php

use App\Models\CompanyAddress;
use App\Models\CompanyContact;
use App\Models\CompanySocial;
use App\Models\CompanyStatistic;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100)->unique();
            $table->string('slug', 100)->unique();
            $table->string('logo')->nullable();
            $table->json('languages');

            $table->foreignIdFor(CompanySocial::class)->nullable();
            $table->foreignIdFor(CompanyContact::class)->nullable();
            $table->foreignIdFor(CompanyAddress::class)->nullable();
            $table->foreignIdFor(CompanyStatistic::class)->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('companies');
    }
};
