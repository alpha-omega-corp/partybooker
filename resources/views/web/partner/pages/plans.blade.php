@php use App\Http\Middleware\LocaleMiddleware; @endphp
@php use Illuminate\Support\Carbon;use Illuminate\Support\Facades; @endphp

@extends('web.main')
@section('page')
    page="cp"
@endsection

@section('title')
    <title>Plans | {{ __('partybooker-cp.www')}}</title>
@endsection


@push('header')
    <script>
        function subscribe(plan, name) {
            document.getElementById('plan').value = plan
            document.getElementById('plan-name').value = name
            document.getElementById('add-card').click()
        }

        function trialIntent(plan, name) {
            document.getElementById('trialPlan').value = plan
            document.getElementById('trialPlanName').value = name
        }
    </script>
@endpush

@section('content')
    <x-dashboard.header/>

    @if($user->subscribed('PartyBooker'))
        <x-dashboard.profile.plan :partner="$user->partnerInfo"/>
    @else
        <input type="hidden" id="trialPlan"/>
        <input type="hidden" id="trialPlanName"/>
        <div class="trial d-flex justify-content-between">

            <div class="w-100 d-flex align-items-start justify-content-center">
                <div>
                    <div class="trial-details">
                        <h6 class="fw-bold text-uppercase mb-3">
                            {{__('plan.trial_billing_details')}}
                        </h6>
                        <x-dashboard.card-info>
                            {{__('plan.trial_billing_details_billing', [
                                'date' => Carbon::now()->addDays(10)->format('d/m/Y'),
                            ])}}
                        </x-dashboard.card-info>
                        <x-dashboard.card-info>
                            {{__('plan.trial_billing_details_cancel_before')}}
                        </x-dashboard.card-info>
                        <x-dashboard.card-info>
                            {{__('plan.trial_billing_details_cancel')}}
                        </x-dashboard.card-info>
                    </div>

                    <div class="trial-choose-plan">
                        <div class="d-flex justify-content-between">
                            <h6 class="fw-bold text-uppercase">
                                {{__('plan.choose')}}
                            </h6>
                            <x-billing.trial-options :plans="$plans"/>
                        </div>
                        <hr>
                        <button class="fw-bold text-uppercase mt-3 btn btn-accent w-100"
                                x-data="{plan: document.getElementById('trialPlan').value, name: document.getElementById('trialPlanName').value}"
                                @click="subscribe(plan, name)">
                            {{__('plan.subscribe_trial')}}
                        </button>
                    </div>


                </div>
            </div>

            <div class="shadow-lg">
                <img src="{{Vite::image('trial-showcase.png')}}" alt="trial-showcase  rounded-circle">
            </div>

        </div>
    @endif



    <hr>
    <section class="mt-5">
        <div class="p-4">
            <x-partner.packages :plans="$plans"/>
        </div>

        <x-billing.payment-intent :intent="$intent"/>

    </section>
@endsection



