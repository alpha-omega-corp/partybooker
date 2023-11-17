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
            document.getElementById('switchPlan').value = name
        }

        function openSubscribe() {
            document.getElementById('add-card').click()
            document.getElementById('plan').value = document.getElementById('trialPlan').value
            document.getElementById('plan-name').value = document.getElementById('trialPlanName').value
        }
    </script>
@endpush

@section('content')
    <x-dashboard.header/>
    <x-billing.payment-intent :intent="$intent"/>

    <input type="hidden" id="trialPlan"/>
    <input type="hidden" id="trialPlanName"/>


    @if($user->subscribed('PartyBooker'))
        <div class="d-flex">
            <div>

                @if($user->pm_type)
                    <div class="credit-card-card">

                        @if (Lang::has('plan.' . strtolower($user->partnerInfo->plan)))
                            <h5 class="{{'text-' . strtolower($user->partnerInfo->plan)}} fw-bold">{{ strtoupper(trans($user->partnerInfo->plan)) }}</h5>
                        @endif

                        <br>

                        <div class="credit-card" data-tippy-content="{{ucfirst($user->pm_type)}}">

                            <div class="d-flex justify-content-around">

                                <div class="d-flex flex-column">
                                    @svg('heroicon-o-credit-card', 'me-1 mt-1')
                                </div>

                                <div class="fw-bold">
                                    <span class="text-danger">****</span>
                                    <span>{{$user->pm_last_four}}</span>
                                </div>

                            </div>
                        </div>

                        <hr>
                        <div class="plan-buttons">
                            <button type="button" class="btn btn-accent" x-data="{target: 'switch-button'}"
                                    @click="document.getElementById(target).click()">
                                {{__('form.subscription_switch')}}
                            </button>
                            @if(!$user->subscription('PartyBooker')->onGracePeriod())
                                <button type="button" class="btn btn-danger pb-1"
                                        x-data="{target: 'unsubscribe-button'}"
                                        @click="document.getElementById(target).click()">
                                    {{__('form.subscription_cancel')}}
                                </button>
                            @else
                                <button type="button" class="btn btn-primary pb-1" x-data="{target: 'resume-button'}"
                                        @click="document.getElementById(target).click()">
                                    {{__('form.subscription_reactivate')}}
                                </button>
                            @endif

                        </div>
                    </div>
                @endif


            </div>

            <x-dashboard.profile.plan :partner="$user->partnerInfo" :user="$user"/>
        </div>

        <x-dashboard.modal
            id="switch"
            :title="__('form.subscription_switch')"
            :button="__('partner.edit')"
            :action="route('subscription.switch')"
            :has-button="false"
            size="modal-md"
            :save-label="__('form.yes')"
            method="POST">

            <input type="hidden" name="name" id="switchPlan">
            <x-billing.trial-options :plans="$plans"/>

            <hr>
            <x-dashboard.card-info>
                {{__('form.subscription_switch_warning')}}
            </x-dashboard.card-info>
        </x-dashboard.modal>

        <x-dashboard.modal
            id="unsubscribe"
            :title="__('form.subscription_cancel')"
            :button="__('partner.edit')"
            :action="route('subscription.cancel')"
            :has-button="false"
            size="modal-md"
            :save-label="__('form.yes')"
            method="POST">

            <x-dashboard.card-info>
                {{__('form.subscription_cancel_warning')}}
            </x-dashboard.card-info>

            @if($user->onTrial())
                <x-dashboard.card-info>
                    {{__('form.subscription_access_ending', [
                        'date' => $user->subscription('PartyBooker')->trial_ends_at->format('d/m/Y'),
                    ])}}
                </x-dashboard.card-info>

            @endif

        </x-dashboard.modal>

        <x-dashboard.modal
            id="resume"
            :title="__('form.subscription_reactivate')"
            :button="__('partner.edit')"
            :action="route('subscription.resume')"
            :has-button="false"
            size="modal-md"
            :save-label="__('form.yes')"
            method="POST">

            <x-dashboard.card-info>
                {{__('form.subscription_reactivate_warning')}}
            </x-dashboard.card-info>

        </x-dashboard.modal>
    @else

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
                                x-data="{}"
                                @click="openSubscribe()">
                            {{__('plan.subscribe_trial')}}
                        </button>
                    </div>


                </div>
            </div>

            <div class="shadow-lg">
                <img src="{{Vite::image('trial-picture-main.png')}}" alt="trial-showcase  rounded-circle">
            </div>

        </div>
    @endif

    <hr>
    <section class="mt-5">
        <div class="p-4">
            <x-partner.packages :plans="$plans"/>
        </div>


    </section>
@endsection



