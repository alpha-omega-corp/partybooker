<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FixSlugsUmlauts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $umlauts = [
            'é' => 'e',
            'ë' => 'e',
            'à' => 'a',
            'è' => 'e',
            'ù' => 'u',
            'â' => 'a',
            'ê' => 'e',
            'î' => 'i',
            'ô' => 'o',
            'û' => 'u',
        ];

        foreach($umlauts as $key=>$value){
            DB::statement("UPDATE partners_info SET slug = REPLACE (slug, '{$key}', '{$value}')");
        }
        
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
