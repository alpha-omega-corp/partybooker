@if (!($user->partnerInfo->plan_option_group) )
    <x-dashboard.card-item :title="__('partner.plan')">
        {{isset($user->partnerInfo->currentPlan) ? $user->partnerInfo->currentPlan->name : ''}}
    </x-dashboard.card-item>

    <x-dashboard.card-item :title="__('partner.choose_plan_option')">
        @foreach($planOptions as $item)
            <li class="li"><span>#</span> {{$item['name']}}</li>
        @endforeach
    </x-dashboard.card-item>
@else
    <x-dashboard.card-item title="Options">
        {{$user->partnerInfo->currentPlan->name}}

        @foreach($planOptions as $item)
            @if($item['group'] == $user->partnerInfo->plan_option_group)
                {{$item['name']}}
            @endif
        @endforeach
    </x-dashboard.card-item>
@endif

@include('web.partner.popup.edit-option')

