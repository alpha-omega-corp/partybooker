@props(['plans'])
<div class="fw-bold text-uppercase">
    @foreach(collect($plans)->reverse() as $key => $plan)
        @php
            $planId = config('stripe.' . $plan->name);
            $planName = $plan->name;
            $planNameLocale = __('plan.' . $planName);
            $class = 'text-' . $planName;
        @endphp
        <div class="form-check" x-data="{plan: '{{$planId}}', name: '{{$planName}}'}"
             @click="trialIntent(plan, name)">
            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault{{$key}}">
            <label class="form-check-label d-flex justify-content-between" for="flexRadioDefault{{$key}}">
                <span @class($class)>
                    {{$planNameLocale}}
                </span>

                <span class="trial-prices">
                    {{$plan->price}} {{__('become_partner.per_year')}}
                </span>
            </label>
        </div>

    @endforeach
</div>
