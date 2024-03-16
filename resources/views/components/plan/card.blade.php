<div class="app-plan">
    <x-plan.title
        :plan="$plan"
        class="plan-title"
    />

    <div class="plan-description">
        {{$plan->locale->description}}
    </div>

    <div class="plan-content">
        <ul>
            <li>{{__('plan.adverts', ['count' => $plan->advert_count])}}</li>

            <ul>
                <li>{{__('plan.tags', ['count' => $plan->tag_count])}}</li>
                <li>{{__('plan.uploads', ['count' => $plan->upload_count])}}</li>
            </ul>
        </ul>
    </div>

    <div class="plan-price">
        <span class="price">{{$plan->price}}</span>
        {{__('plan.yearly')}}
    </div>
</div>
