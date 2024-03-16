@props(['plan'])
<div class="fw-bold text-uppercase">
    @foreach(collect($plans)->reverse() as $key => $plan)
        @php
            $planId = config('stripe.' . $plan->name);
            $planName = $plan->name;
            $planNameLocale = __('plan.' . $planName);
            $class = 'text-' . $planName;
        @endphp
        <div class="form-check">
            <input class="form-check-input" type="radio" name="plan" id="flexRadioDefault{{$key}}" value="{{$planId}}"
                   x-data="{plan: '{{$planId}}', name: '{{$planName}}'}"
                   @click="trialIntent(plan, name)">
            <label class="form-check-label d-flex justify-content-between" for="flexRadioDefault{{$key}}">
                <span @class($class)>
                    {{$planNameLocale}}
                </span>

                <span class="trial-prices text-gray">
                    {{$plan->price}} CHF {{__('become_partner.per_year')}}
                </span>
            </label>
        </div>

    @endforeach
</div>
