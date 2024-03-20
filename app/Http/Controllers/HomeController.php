<?php

namespace App\Http\Controllers;

use App\Enums\AppAboutType;
use App\Enums\AppContentType;
use App\Http\Requests\StoreHelpRequest;
use App\Models\AppAbout;
use App\Models\AppComment;
use App\Models\AppContent;
use App\Models\AppInformation;
use App\Models\AppPlan;
use App\Models\AppPost;
use App\Models\AppUsp;
use App\Models\Category;
use App\Models\PartnerTop;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class HomeController extends Controller
{
    public function index()
    {
        return view('app.home.index', [
            'categories' => Category::all(),
            'comments' => AppComment::all(),
            'information' => AppInformation::all(),
            'top' => PartnerTop::all()->map(fn($item) => $item->partner),
        ]);
    }

    public function about(): View
    {
        return view('app.home.about', [
            'description' => AppContent::ofType(AppContentType::APP_ABOUT)->first()->locale,
            'concept' => AppContent::ofType(AppContentType::APP_CONCEPT)->first()->locale,
            'abouts' => AppAbout::all()
        ]);
    }

    public function partnership(): View
    {
        return view('app.home.partnership', [
            'plans' => AppPlan::all(),
            'benefits' => AppAbout::ofType(AppAboutType::BENEFITS)->get(),
            'usps' => AppUsp::all(),
        ]);
    }

    public function faq(): View
    {
        return view('app.home.faq');
    }

    public function blog(): View
    {
        return view('app.home.blog', [
            'posts' => AppPost::published()->get()
        ]);
    }

    public function requestHelp(StoreHelpRequest $request): RedirectResponse
    {
        return back()->with('success', __('home.help_success'));
    }
}
