<?php

namespace App\Http\Controllers;

use App\Enums\CategoryType;
use App\Enums\PlanType;
use App\Models\Advert;
use App\Models\Partner;
use App\Models\Payment;
use App\Models\Plan;
use Illuminate\Http\JsonResponse;

class AjaxController extends Controller
{
    public function partners(): JsonResponse
    {
        $viewPartners = Plan::all()->map(function (Plan $plan) {
            return $plan
                ->ofType(PlanType::from($plan->name))
                ->first()
                ->payments
                ->map(function (Payment $payment) {
                    $partner = $payment->partner;
                    $hasAddress = $partner->company->address !== null;

                    return [
                        'url' => route('partner.dashboard', $partner->id),
                        'id' => $partner->id,
                        'name' => $partner->user->name,
                        'email' => $partner->user->email,
                        'plan' => $partner->payment->plan->name,
                        'paymentStart' => $partner->payment->accepted_at->toDateString(),
                        'paymentEnd' => $partner->payment->expires_at->toDateString(),
                        'paymentType' => $partner->payment->type,
                        'sortPayment' => $partner->payment->expires_at->timestamp,
                        'company' => $partner->company->name,
                        'address' => $hasAddress ? $partner->company->address->address : '',
                        'categories' => $partner->company->adverts->map(fn(Advert $advert) => strtolower(CategoryType::from($advert->service->serviceable_type)->name)),
                        'created' => $partner->company->created_at->toDateString(),
                        'sortCreated' => $partner->company->created_at->timestamp,
                    ];
                });
        })->flatten(1);

        return response()->json($viewPartners);
    }

    public function listing(): JsonResponse
    {
        $viewPartners = Advert::listing()
            ->get()
            ->map(fn(Advert $advert) => [
                'id' => $advert->id,
                'title' => $advert->locale->title,
                'categories' => ucfirst(strtolower(CategoryType::from($advert->service->serviceable_type)->name)),
                'company' => $advert->company->name,
                'address' => $advert->company->address->address,
                'thumbnail' => $advert->images()->thumbnail()->first()->path,
                'url' => route('guest.listing.advert', [
                    'company' => $advert->company,
                    'advert' => $advert,
                ]),
            ]);

        return response()->json($viewPartners);

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
