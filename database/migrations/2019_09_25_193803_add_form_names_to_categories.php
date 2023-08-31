<?php

use App\Models\Category;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFormNamesToCategories extends Migration
{
	private $categories = [
		'cat1' => 'event-place',
		'cat2' => 'event-place',
		'cat3' => 'caterer',
		'cat4' => 'wine',
		'cat5' => 'equipment',
		'cat6' => 'entertainment',
	];
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('categories', function (Blueprint $table) {
			$table->string('form_name');
		});

		$categ = Category::whereNull('parent_id')->with(['subCategories'])->get();
		foreach ($categ as $category) {
			Category::where('code', $category->code)->update(['form_name' => $this->categories[$category->code]]);
			$codes = [];
			foreach ($category->subCategories as $sub){
				$codes[] = $sub->code;
			}

			Category::whereIn('code', $codes)->update(['form_name' => $this->categories[$category->code]]);
		}

		Category::whereIn('code', ['cat1_4'])->update(['form_name' => 'equipment']);
		Category::whereIn('code', ['cat4_3'])->update(['form_name' => 'event-place']);
		Category::whereIn('code', ['cat2_5', 'cat2_6', 'cat2_7'])->update(['form_name' => 'entertainment']);

	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('categories', function (Blueprint $table) {
			$table->dropColumn('form_name');
		});
	}
}
