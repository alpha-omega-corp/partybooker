<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePaymentMethod;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Cashier\Exceptions\IncompletePayment;

class BillingController extends Controller
{

    public function updatePaymentMethod(StorePaymentMethod $request)
    {
        $request->validated();
        $user = $request->user();
        $stripeId = $request->get('method');

        $user->createOrGetStripeCustomer();
        $user->updateDefaultPaymentMethod($stripeId);

        return redirect()->route('profile', Auth::user()->id_partner)->with(['success' => 'Your payment method is updated!']);
    }

    public function index(Request $request)
    {
        $user = auth()->user();
        try {
            $newSubscription = $user->newSubscription('PartyBooker')->create($request->payment_method, ['email' => $user->email]);
        } catch (IncompletePayment $exception) {
            return redirect()->back()->with(['error_message' => $exception->getMessage()]);
        }

        return redirect()->route('profile')->with(['success' => 'Your subscription is now active!']);
    }
}
