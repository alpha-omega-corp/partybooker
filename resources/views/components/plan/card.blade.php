<div class="app-plan shadow-lg">
    <x-plan.title
        :plan="$plan"
        class="plan-title"
    />

    <div class="plan-description">
        {{$plan->locale->description}}
    </div>

    <div class="plan-content">

        <div class="plan-adverts-container">
            <ul class="plan-adverts">
                <li>{{__('plan.adverts', ['count' => $plan->advert_count])}}</li>
                <li>{{__('plan.tags', ['count' => $plan->tag_count])}}</li>
                <li>{{__('plan.uploads', ['count' => $plan->upload_count])}}</li>
            </ul>
        </div>

    </div>

    <div class="plan-price">
        <span class="price">{{$plan->price}}</span> CHF
        {{__('plan.yearly')}}
    </div>
</div>
