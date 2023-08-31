<?php


namespace App\Http\Controllers\Web;


use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Support\Facades\Cache;

class PageController extends Controller
{

	public function __construct()
	{
		$categories = $value = Cache::get(App()->getLocale() . '_filter_categories');
		if($categories){
			$this->categories = $categories;
		}else{
			$this->categories = Category::with(['subcategories','lang','subcategories.lang'])->whereNull('parent_id')->get();
			Cache::put(App()->getLocale() . '_filter_categories', $this->categories, 60000);
		}
	}

	public function siteMap(){

		$articles = Article::where('status', 1)->get();

		return view('pages.sitemap', [
			'categories' => $this->categories,
			'articles' => $articles
		]);
	}

}
