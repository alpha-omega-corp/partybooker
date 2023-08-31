<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddSeoCategory extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("ALTER TABLE `category_locales`
ADD COLUMN `meta_title` VARCHAR(191) NULL DEFAULT NULL AFTER `name`,
ADD COLUMN `meta_description` TEXT NULL DEFAULT NULL AFTER `meta_title`,
ADD COLUMN `meta_keywords` VARCHAR(191) NULL DEFAULT NULL AFTER `meta_description`,
ADD COLUMN `description` TEXT NULL DEFAULT NULL AFTER `meta_keywords`");
        ;

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
