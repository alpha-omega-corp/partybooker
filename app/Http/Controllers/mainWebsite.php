<?php

namespace App\Http\Controllers;

use App\Interfaces\IPlanService;
use App\Models\Category;
use App\Models\PartnersInfo;
use App\Models\TopService;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class mainWebsite extends Controller
{
    protected $categories;
    private IPlanService $planService;

    public function __construct(IPlanService $planService)
    {
        $this->planService = $planService;

        $categories = $value = Cache::get(App()->getLocale() . '_filter_categories');
        if ($categories) {
            $this->categories = $categories;
        } else {
            $this->categories = Category::with(['subcategories', 'lang', 'subcategories.lang'])->whereNull('parent_id')->get();
            Cache::put(App()->getLocale() . '_filter_categories', $this->categories, 60000);
        }
    }

    public function home()
    {
        $services = Cache::get(App()->getLocale() . '_home_page_services');
        if (!$services) {
            $services = PartnersInfo::where('payment_status', 1)->where('public', 1)
                ->with(['categories', 'categories.primaryCategory', 'categories.primaryCategory.lang'])->get();
            Cache::put(App()->getLocale() . '_home_page_services', $services, 600);
        }

        return view('home', [
            'top' => TopService::all()->map(fn($item) => $item->partner),
            'services' => $services,
            'categories' => $this->categories,
        ]);
    }

    public function phoneQuestion(Request $request)
    {
        $date = date('Y-m-d H:i:s');
        $phone = $request->input('phone');
        DB::insert('insert into messages (message_sent, contact_form, phone) value(?, ?, ?)', [$date, 'question', $phone]);

        return redirect()->back()->with('success', 'Thank you! We will phone you as soon as possible');
    }

    public function partner()
    {
        return view('partner', [
            'plans' => $this->planService->getPlans(),
        ]);

    }

    public function partnerterms()
    {
        $terms = DB::table('settings')->where('id', 1)->get();
        $en_terms = $terms[0]->service_terms_en;
        $fr_terms = $terms[0]->service_terms_fr;
        return view('service-terms', ['en_terms' => $en_terms, 'fr_terms' => $fr_terms]);
    }

    public function userterms()
    {
        $terms = DB::table('settings')->where('id', 1)->get();
        $en_terms = $terms[0]->user_terms_en;
        $fr_terms = $terms[0]->user_terms_fr;
        return view('user-terms', ['en_terms' => $en_terms, 'fr_terms' => $fr_terms]);
    }

    public function aboutus()
    {
        return view('aboutus');
    }

    public function faq()
    {
        $top = DB::table('partners_info')->where('payment_status', 1)->where('public', 1)->where('plan', 'exclusif')->get();
        $top = collect($top)->sortByDesc('id')->take(10);
        $faqs = DB::select('select * from faq');

        $category = 'null';
        $place = 'null';
        $budget = 'null';
        $name = 'null';

        return view('faq', ['faqs' => $faqs, 'top' => $top, 'category' => $category, 'place' => $place, 'budget' => $budget, 'name' => $name, 'categories' => $this->categories]);
    }

    public function contacts()
    {
        $settings = DB::select('select * from settings');

        $category = 'null';
        $place = 'null';
        $budget = 'null';
        $name = 'null';

        return view('contacts', ['settings' => $settings, 'category' => $category, 'place' => $place, 'budget' => $budget, 'name' => $name, 'categories' => $this->categories]);
    }

    public function blog()
    {
        $blog = collect(DB::select('select * from blog'))->sortByDesc('updated')->all();
        foreach ($blog as $post) {
            $text_en = html_entity_decode(strip_tags($post->article_en));
            $post->article_en = substr($text_en, 0, 150);

            $text_fr = html_entity_decode(strip_tags($post->article_fr));
            $post->article_fr = substr($text_fr, 0, 150);
        }

        return view('blog', ['blog' => $blog]);
    }

    public function post(Request $request, $post_slug)
    {
        $post = DB::table('blog')->where('slug', $post_slug)->get();
        if (count($post) > 0) {
            return view('post', ['post' => $post]);
        } else {
            return view('404');
        }
    }

    private function getPlanOptions($options)
    {
        $temp = [];
        foreach ($options as $option) {
            $temp[$option->group][] = $option;
        }

        $list = [];

        foreach ($temp as $id => $opt) {
            $name = "";
            $j = 0;
            foreach ($opt as $item) {
                $name = $name . "{$item->categories_count} category ({$item->sub_categories_count} subcategory)";
                $j++;
                if ($j != count($opt)) {
                    $name = $name . " and ";
                } else {
                    $list[] = [
                        'group' => $id,
                        'name' => rtrim($name, "")
                    ];
                    $name = '';
                }
            }
        }

        return $list;
    }
}
