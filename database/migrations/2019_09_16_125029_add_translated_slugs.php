<?php

use App\Models\Category;
use App\Models\CategoryLocale;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTranslatedSlugs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('category_locales', function (Blueprint $table){
        	$table->string('slug')->after('lang')->nullable();
        });

        $categories = Category::all();
        foreach ($categories as $category){
			CategoryLocale::where('categories_id', $category->id)->update(['slug' => $category->slug]);
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
	    Schema::table('category_locales', function (Blueprint $table){
		    $table->dropColumn('slug');
	    });
    }
}
