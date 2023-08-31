<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddSeoService extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement('ALTER TABLE `partners_info`
        ADD COLUMN `en_seo_desc` TEXT NULL DEFAULT NULL,
        ADD COLUMN `fr_seo_desc` TEXT NULL DEFAULT NULL,
        ADD COLUMN `en_seo_title` TEXT NULL DEFAULT NULL,
        ADD COLUMN `fr_seo_title` TEXT NULL DEFAULT NULL,
        ADD COLUMN `en_seo_keywords` TEXT NULL DEFAULT NULL,
        ADD COLUMN `fr_seo_keywords` TEXT NULL DEFAULT NULL
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
