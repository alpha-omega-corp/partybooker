<?php


namespace App\Http\Controllers;


use App\Http\Middleware\LocaleMiddleware;
use App\Models\Article;
use App\Models\Category;
use App\Models\Partner;

class SiteMapController extends Controller
{
    public function sitemap($lang)
    {

        if (!in_array($lang, LocaleMiddleware::$languages)) {
            return abort('404');
        }

        $categories = Category::whereNull('parent_id')->with(['locales'])->get();
        $partners = Partner::where('public', 1)->where('payed', 1)->get();
        $articles = Article::where('status', 1)->get();

        $content = view('pages.sitemap-xml', ['categories' => $categories, 'partners' => $partners, 'articles' => $articles, 'lang' => $lang])->render();

        return response($content)
            ->withHeaders([
                'Content-Type' => 'text/xml'
            ]);
    }
}
