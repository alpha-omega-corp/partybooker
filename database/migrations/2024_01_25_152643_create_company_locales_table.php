<?php

use App\Models\Company;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('company_locales', function (Blueprint $table) {
            $table->id();
            $table->string('lang');
            $table->string('slogan');
            $table->text('description');
            $table->json('keywords');
            $table->foreignIdFor(Company::class, 'company_id')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('company_locales');
    }
};
