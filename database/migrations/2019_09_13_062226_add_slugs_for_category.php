<?php

use App\Models\Category;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddSlugsForCategory extends Migration
{

	private $cats = [
		'cat1' => 'reception-venue',
		'cat2' => 'business-event',
		'cat3' => 'catering',
		'cat4' => 'wine-lovers',
		'cat5' => 'equipment',
		'cat6' => 'entertainment',
	];

	private $subcat = [
		'cat1_1' => 'authentic',
		'cat1_2' => 'estate-wine-cellar',
		'cat1_3' => 'original-venue',
		'cat1_4' => 'tent-rental',
		'cat1_5' => 'prestigious',
		'cat1_6' => 'lake-view',
		'cat1_7' => 'trend',

		'cat2_1' => 'training',
		'cat2_2' => 'seminar-medium',
		'cat2_3' => 'conference-assembly',
		'cat2_4' => 'seminar-accomodation',
		'cat2_5' => 'team-building',
		'cat2_6' => 'company-outing',
		'cat2_7' => 'incentive',

		'cat3_1' => 'local-artisan',
		'cat3_2' => 'vogue',
		'cat3_3' => 'world-cuisine',
		'cat3_4' => 'personal-chef',
		'cat3_5' => 'lunchbox',
		'cat3_6' => 'delivery',

		'cat4_1' => 'wine-tasting',
		'cat4_2' => 'activities',
		'cat4_3' => 'shop',
		'cat4_4' => 'guide',

		'cat5_1' => 'furniture',
		'cat5_2' => 'kitchen-office',
		'cat5_3' => 'audiovisual',
		'cat5_4' => 'coordination',
		'cat5_5' => 'table-decoration',
		'cat5_6' => 'floral',
		'cat5_7' => 'decoration',

		'cat6_1' => 'animation',
		'cat6_2' => 'dj-musiciens',
		'cat6_3' => 'artists',
		'cat6_4' => 'costumes',
		'cat6_5' => 'activities',
	];

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
	    Schema::table('categories', function(Blueprint $table) {
		    $table->renameColumn('url', 'slug');
	    });

	    foreach ($this->cats as $code => $slug){
	    	Category::where('code', $code)->update(['slug' => $slug]);
	    }

	    foreach ($this->subcat as $code => $slug){
		    Category::where('code', $code)->update(['slug' => $slug]);
	    }

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
	    Schema::table('categories', function(Blueprint $table) {
		    $table->renameColumn('slug', 'url');
	    });
    }
}
