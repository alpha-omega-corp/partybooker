<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddAuthorToPost extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("ALTER TABLE `blog` 
ADD COLUMN `author` VARCHAR(191) NULL DEFAULT NULL AFTER `main_img_alt_fr`");
    }
}
