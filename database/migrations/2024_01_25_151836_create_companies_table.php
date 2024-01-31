<?php

use App\Models\CompanySocial;
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
            $table->string('fax')->nullable();
            $table->string('phone')->unique();
            $table->string('email')->unique();

            $table->string('address');
            $table->string('lat');
            $table->string('lon');
            $table->string('loc');

            $table->foreignIdFor(CompanySocial::class, 'company_social_id')->nullable();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('companies');
    }
};
