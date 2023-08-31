<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateCategoriesList extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        \App\Models\CategoryLocale::where('lang','fr')->where('name','Meubles')->update([
        	'name' => 'Mobilier',
        	'slug' => 'mobilier',
        ]);

	    \App\Models\CategoryLocale::where('lang','fr')->where('name','Décoration de table')->update([
		    'name' => 'Art de la Table',
		    'slug' => 'art-de-la-table',
	    ]);


	    \App\Models\CategoryLocale::where('lang','fr')->where('name','Motivation')->update([
		    'name' => 'Incentive',
		    'slug' => 'incentive',
	    ]);
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
