<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddAltsFrSwiss extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement('ALTER TABLE `swisswin_directories`
        ADD COLUMN `image_alt_fr` VARCHAR(191) NULL DEFAULT NULL
');
        DB::statement('ALTER TABLE `blog`
        ADD COLUMN `main_img_alt_fr` VARCHAR(191) NULL DEFAULT NULL
');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
