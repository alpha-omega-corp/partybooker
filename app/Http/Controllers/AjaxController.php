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
        $partners = Plan::all()->map(function (Plan $plan) {
            return $plan
                ->ofType(PlanType::from($plan->name))
                ->first()
                ->payments
                ->map(fn(Payment $payment) => $payment->partner);
        })->flatten(1);

        $viewPartners = $partners->map(function (Partner $partner) {
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

    public function listing()
    {
        $viewPartners = Advert::listing()
            ->get()
            ->map(fn(Advert $advert) => [
                'id' => $advert->id,
                'title' => $advert->locale->title,
                'company' => $advert->company->name,
                'address' => $advert->company->address->address,
            ]);

        return response()->json($viewPartners);

    }
}
