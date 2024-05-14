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
use App\Models\AppPostLocale;
use App\Models\AppUsp;
use App\Models\Category;
use App\Models\Notification;
use App\Models\RequestHelp;
use App\Models\RequestPartner;
use App\Services\PartnerService;
use Butschster\Head\Contracts\MetaTags\MetaInterface;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class HomeController extends Controller
{
    public function __construct(protected MetaInterface $meta)
    {
        //
    }

    public function index()
    {
        $content = AppContent::ofType(AppContentType::APP_HOME)->first()->locale;

        $this->meta
            ->prependTitle(__('nav.home'))
            ->setDescription($content);

        return view('app.home.index', [
            'categories' => Category::all(),
            'comments' => AppComment::all(),
            'commentsRandom' => AppComment::all()->random(3),
            'information' => AppInformation::all(),
            'content' => $content,
            'top' => (new PartnerService())->topServices(),
            'topRandom' => (new PartnerService())->topServices(true),
        ]);
    }

    public function about(): View
    {
        $this->meta->prependTitle(__('nav.about'));

        return view('app.home.about', [
            'description' => AppContent::ofType(AppContentType::APP_ABOUT)->first()->locale,
            'concept' => AppContent::ofType(AppContentType::APP_CONCEPT)->first()->locale,
            'abouts' => AppAbout::ofType(AppAboutType::FEATURES)->get(),
        ]);
    }

    public function partnership(): View
    {
        $this->meta->prependTitle(__('nav.partnership'));

        return view('app.home.partnership', [
            'plans' => AppPlan::all()->where('price', '>', 0),
            'benefits' => AppAbout::ofType(AppAboutType::BENEFITS)->get(),
            'usps' => AppUsp::all(),
        ]);
    }

    public function faq(): View
    {
        $this->meta->prependTitle(__('nav.faq'));

        return view('app.home.faq', [
            'faqs' => AppFaq::all(),
        ]);
    }

    public function blog(): View
    {
        $this->meta->prependTitle(__('nav.blog'));

        return view('app.home.blog', [
            'posts' => AppPost::published()->get()
        ]);
    }

    public function showPost(string $slug)
    {
        $locale = AppPostLocale::where('slug', $slug)->first();

        return view('app.home.post', [
            'post' => $locale->post
        ]);
    }

    public function requestHelp(StoreHelpRequest $request): RedirectResponse
    {
        $data = $request->validated();
        $notification = RequestHelp::create();

        Notification::create([
            'requestable_type' => RequestHelp::class,
            'requestable_id' => $notification->id,
            'email' => $data['email'],
            'phone' => $data['phone'],
            'message' => $data['message'],
        ]);

        return back()->with('success', __('request.help.success'));
    }

    public function requestPartnership(StorePartnershipRequest $request): RedirectResponse
    {
        $data = $request->validated();
        $notification = RequestPartner::create([
            'app_plan_id' => $data['plan']
        ]);

        Notification::create([
            'requestable_type' => RequestPartner::class,
            'requestable_id' => $notification->id,
            'phone' => $data['phone'],
            'email' => $data['email'],
            'message' => $data['message'],
        ]);

        return back()->with('success', __('request.partnership.success'));
    }
}
