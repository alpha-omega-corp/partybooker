<?php

namespace App\Http\Controllers;

use App\Enums\CategoryType;
use App\Enums\PlanType;
use App\Models\Advert;
use App\Models\AppPlan;
use App\Models\Partner;
use App\Models\PartnerPayment;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Throwable;

class AjaxController extends Controller
{
    public function partners(): JsonResponse
    {
        $viewPartners = AppPlan::all()->map(function (AppPlan $plan) {
            return $plan
                ->ofType(PlanType::from($plan->code))
                ->first()
                ->payments
                ->map(function (PartnerPayment $payment) {
                    $partner = $payment->partner;
                    $hasAddress = $partner->company->address !== null;

                    return [
                        'url' => route(__('route.profile'), $partner->company),
                        'id' => $partner->id,
                        'name' => $partner->user->name,
                        'email' => $partner->user->email,
                        'plan' => $partner->payment->plan->code,
                        'paymentStart' => $partner->payment->accepted_at->toDateString(),
                        'paymentEnd' => $partner->payment->expires_at->toDateString(),
                        'paymentType' => $partner->payment->type,
                        'sortPayment' => $partner->payment->expires_at->timestamp,
                        'company' => $partner->company->name,
                        'address' => $hasAddress ? $partner->company->location->address : '',
                        'categories' => $partner->company->adverts->map(fn(Advert $advert) => strtolower(CategoryType::from($advert->service->serviceable_type)->name)),
                        'created' => $partner->company->created_at->toDateString(),
                        'sortCreated' => $partner->company->created_at->timestamp,
                    ];
                });
        })->flatten(1);

        return response()->json($viewPartners);
    }

    /**
     * @throws Throwable
     */
    public function listingSearch(Request $request): JsonResponse
    {
        $filter = trim($request->input('filter'));

        $adverts = Advert::whereHas('locale', function (Builder $query) use ($filter) {
            $query->where('title', 'like', "%$filter%");
        })->get();

        return response()->json([
            'adverts' => $adverts->count() != 0
                ? view('app.listing.partials.listing-ajax', compact('adverts'))->render()
                : view('app.listing.partials.listing-empty')->render(),
        ]);
    }

    /**
     * @throws Throwable
     */
    public function listingFilter(Request $request): JsonResponse
    {
        $location = $request->input('location');
        $category = $request->input('category');
        $adverts = Advert::listing();

        if ($location) {
            $adverts = Advert::whereHas('company', function (Builder $query) use ($location) {
                $query->whereHas('location', function (Builder $query) use ($location) {
                    $query->where('state', 'like', "%$location%");
                });
            });
        }

        if ($category) {
            $adverts = $adverts->where('category_id', $category);
        }

        $adverts = $adverts->get();

        return response()->json([
            'adverts' => $adverts->count() != 0
                ? view('app.listing.partials.listing-ajax', compact('adverts'))->render()
                : view('app.listing.partials.listing-empty')->render(),
        ]);
    }

    /**
     * @throws Throwable
     */
    public function listing(Request $request): JsonResponse
    {
        $adverts = Advert::listing()->paginate(5);

        return response()->json([
            'adverts' => view('app.listing.partials.listing-ajax', compact('adverts'))->render(),
            'next' => $adverts->currentPage() + 1,
            'last' => $adverts->lastPage(),
        ]);
    }

    public function tops(): JsonResponse
    {
        $partnerTops = Partner::all()->map(function (Partner $partner) {
            return [
                'id' => $partner->id,
                'name' => $partner->user->name,
                'company' => $partner->company->name,
                'top' => (bool)$partner->top,
            ];
        });

        return response()->json($partnerTops);
    }
}
