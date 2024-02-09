<?php

use App\Models\Partner;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->dateTime('verified_at')->nullable();
            $table->string('email')->unique();
            $table->string('password');
            $table->string('provider')->nullable();
            $table->string('provider_id')->nullable();
            $table->boolean('is_admin')->default(false);
            $table->foreignIdFor(Partner::class)->nullable();

            $table->rememberToken();
            $table->timestamps();

        });
    }

    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
