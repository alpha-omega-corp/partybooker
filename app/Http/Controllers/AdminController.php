<?php

namespace App\Http\Controllers;

use App\Enums\AppAboutType;
use App\Enums\AppContentType;
use App\Enums\CategoryType;
use App\Enums\PartnerSort;
use App\Enums\PlanType;
use App\Http\Requests\StorePartnerTops;
use App\Http\Requests\UpdateAppContactsRequest;
use App\Models\AppAbout;
use App\Models\AppComment;
use App\Models\AppContact;
use App\Models\AppContent;
use App\Models\AppFaq;
use App\Models\AppForm;
use App\Models\AppInformation;
use App\Models\AppPlan;
use App\Models\AppPost;
use App\Models\AppUsp;
use App\Models\Category;
use App\Models\Notification;
use App\Models\PartnerTop;
use Illuminate\Http\RedirectResponse;

class AdminController extends Controller
{
    public function content()
    {
        return view('app.admin.content.index', [
            'appContact' => AppContact::first(),
            'comments' => AppComment::all(),
            'information' => AppInformation::all(),
            'posts' => AppPost::all(),
            'faqs' => AppFaq::all(),
            'plans' => AppPlan::all(),
            'usp' => AppUsp::all(),
            'features' => AppAbout::ofType(AppAboutType::FEATURES)->get(),
            'benefits' => AppAbout::ofType(AppAboutType::BENEFITS)->get(),
            'content' => [
                AppContentType::USER_TERMS->name => AppContent::ofType(AppContentType::USER_TERMS)->first(),
                AppContentType::SERVICE_TERMS->name => AppContent::ofType(AppContentType::SERVICE_TERMS)->first(),
                AppContentType::APP_ABOUT->name => AppContent::ofType(AppContentType::APP_ABOUT)->first(),
                AppContentType::APP_CONCEPT->name => AppContent::ofType(AppContentType::APP_CONCEPT)->first(),
                AppContentType::APP_HOME->name => AppContent::ofType(AppContentType::APP_HOME)->first(),
            ],
        ]);
    }

    public function forms()
    {
        return view('app.admin.form.index', [
            'forms' => AppForm::all(),
        ]);
    }

    public function partners()
    {
        return view('app.admin.partner.index', [
            'plan' => AppPlan::all()->map(fn(AppPlan $plan) => $plan->code),
            'partnerSorts' => PartnerSort::values(),
            'planFilters' => PlanType::values(),
            'categoryFilters' => CategoryType::names(),
        ]);
    }

    public function categories()
    {
        return view('app.admin.categories.index', [
            'categories' => Category::all(),
        ]);
    }

    public function plans()
    {
        return view('app.admin.plans.index', [
            'plans' => AppPlan::all(),
        ]);
    }

    public function messages()
    {
        return view('app.admin.message.index', [
            'helps' => Notification::helps()->get(),
            'partnerships' => Notification::partnerships()->get(),
            'services' => Notification::services()->get()
        ]);
    }

    public function updateTopServices(StorePartnerTops $request): RedirectResponse
    {
        $validated = $request->validated();
        if (!key_exists('top', $validated)) {
            if (count(PartnerTop::all()) > 0) {
                PartnerTop::first()->delete();
            }

            return redirect()->back()->with('success', 'Top services updated');
        }

        $partners = $validated['top'];

        if (PartnerTop::count() > 0) {
            $currentTops = PartnerTop::all()->map(fn($e) => $e->partner->id)->toArray();
            $deleteTops = array_diff($currentTops, $partners);
            $newTops = array_diff($partners, $currentTops);

            if (count($deleteTops) > 0) {
                foreach (collect($deleteTops)->flatten() as $id) {
                    PartnerTop::where('partner_id', $id)->delete();
                }
            }
        } else {
            $newTops = $partners;
        }

        foreach ($newTops as $id) {
            $service = new PartnerTop();
            $service->partner_id = $id;
            $service->save();
        }

        return redirect()->back()->with('success', 'Top services updated');
    }

    public function updateContacts(UpdateAppContactsRequest $request): RedirectResponse
    {
        $data = $request->validated();

        AppContact::all()->first()->update($data);

        return back()->with('success', 'App contacts updated');
    }

}
