<?php

namespace App\Http\Controllers;

use App\Enums\AppAboutType;
use App\Enums\AppContentType;
use App\Http\Requests\StoreHelpRequest;
use App\Http\Requests\StorePartnershipRequest;
use App\Models\AppAbout;
use App\Models\AppComment;
use App\Models\AppContent;
use App\Models\AppFaq;
use App\Models\AppInformation;
use App\Models\AppPlan;
use App\Models\AppPost;
use App\Models\AppUsp;
use App\Models\Category;
use App\Models\Notification;
use App\Models\RequestHelp;
use App\Models\RequestPartner;
use App\Services\PartnerService;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class HomeController extends Controller
{

    public function __construct()
    {

    }

    public function index()
    {


        return view('app.home.index', [
            'categories' => Category::all(),
            'comments' => AppComment::all(),
            'commentsRandom' => AppComment::all()->random(3),
            'information' => AppInformation::all(),
            'content' => AppContent::ofType(AppContentType::APP_HOME)->first()->locale,
            'top' => (new PartnerService())->topServices(),
            'topRandom' => (new PartnerService())->topServices(true),
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
        return view('app.home.faq', [
            'faqs' => AppFaq::all(),
        ]);
    }

    public function blog(): View
    {
        return view('app.home.blog', [
            'posts' => AppPost::published()->get()
        ]);
    }

    public function showPost(AppPost $post)
    {
        return view('app.home.post', [
            'post' => $post
        ]);
    }

    public function requestHelp(StoreHelpRequest $request): RedirectResponse
    {
        $data = $request->validated();

        $help = RequestHelp::create();

        Notification::create([
            'notifiable_type' => RequestHelp::class,
            'notifiable_id' => $help->id,
            'phone' => $data['phone'],
            'message' => $data['message'],
        ]);

        return back()->with('success', __('request.help.success'));
    }

    public function requestPartnership(StorePartnershipRequest $request): RedirectResponse
    {
        $data = $request->validated();

        $partnership = RequestPartner::create($data);

        Notification::create([
            'notifiable_type' => RequestPartner::class,
            'notifiable_id' => $partnership->id,
            'phone' => $data['phone'],
            'message' => $data['message'],
        ]);

    }
}
