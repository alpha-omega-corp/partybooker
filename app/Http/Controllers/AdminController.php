<?php

namespace App\Http\Controllers;

use App\Enums\CategoryType;
use App\Enums\PartnerSort;
use App\Enums\PlanType;
use App\Http\Requests\StorePartnerTops;
use App\Models\Category;
use App\Models\Notification;
use App\Models\PartnerTop;
use App\Models\Plan;
use App\Models\Post;

class AdminController extends Controller
{
    public function category()
    {
        return view('app.admin.category.index', [
            'categories' => Category::all(),
        ]);
    }

    public function partners()
    {
        return view('app.admin.partner.index', [
            'plans' => Plan::all()->map(fn(Plan $plan) => $plan->name),
            'partnerSorts' => PartnerSort::values(),
            'planFilters' => PlanType::values(),
            'categoryFilters' => CategoryType::names(),
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

    public function blog()
    {
        return view('app.admin.blog.index', [
            'posts' => Post::all()
        ]);
    }

    public function updateTopServices(StorePartnerTops $request)
    {
        $validated = $request->validated();
        $partners = $validated['top'];

        $currentTops = PartnerTop::all()->map(fn($e) => $e->partner->id)->toArray();
        $newTops = array_diff($partners, $currentTops);
        $deleteTops = array_diff($currentTops, $partners);

        foreach ($newTops as $id) {
            $service = new PartnerTop();
            $service->partner_id = $id;
            $service->save();
        }

        if (count($deleteTops) > 0) {
            foreach (collect($deleteTops)->flatten() as $id) {
                PartnerTop::where('partner_id', $id)->delete();
            }
        }

        return redirect()->back()->with('success', 'Top services updated');
    }

}
