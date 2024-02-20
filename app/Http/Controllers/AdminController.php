<?php

namespace App\Http\Controllers;

use App\Enums\CategoryType;
use App\Enums\PartnerSort;
use App\Enums\PlanType;
use App\Http\Requests\StorePartnerTops;
use App\Models\Notification;
use App\Models\Partner;
use App\Models\PartnerTop;
use App\Models\Plan;
use App\Models\Post;

class AdminController extends Controller
{
    public function index()
    {
        return view('app.admin.index', [

        ]);
    }

    public function partners()
    {
        return view('app.admin.partners', [
            'plans' => Plan::all()->map(fn(Plan $plan) => $plan->name),
            'partnerSorts' => PartnerSort::values(),
            'planFilters' => PlanType::values(),
            'categoryFilters' => CategoryType::names(),
        ]);
    }

    public function messages()
    {
        return view('app.admin.messages', [
            'helps' => Notification::helps()->get(),
            'partnerships' => Notification::partnerships()->get(),
            'services' => Notification::services()->get()
        ]);
    }

    public function blog()
    {
        return view('app.admin.blog', [
            'posts' => Post::all()
        ]);
    }

    public function updateTopServices(StorePartnerTops $request)
    {
        $validated = $request->validated();
        $topPartners = $validated['top'];
        $currentTop = PartnerTop::all()->map(fn($e) => $e->partner->id_partner)->toArray();

        $newTop = array_diff($topPartners, $currentTop);
        $toDelete = array_diff($currentTop, $topPartners);
        foreach ($newTop as $partnerId) {
            $service = new PartnerTop();
            $service->partner_id = Partner::find($partnerId)->first()->id;
            $service->save();
        }

        foreach (collect($toDelete)->flatten() as $partnerId) {
            $service = PartnerTop::where('partner_id', $partnerId)->first();
            $service->delete();
        }

        return redirect()->back()->with('success', 'Top services updated');
    }
}
