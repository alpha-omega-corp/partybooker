<?php

use App\Models\Partner;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('partner_comments', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Partner::class);
            $table->string('name');
            $table->text('english');
            $table->text('french');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('partner_comments');
    }
};
