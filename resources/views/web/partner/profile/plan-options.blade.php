@if(isset($user->partnerInfo->currentPlan))
    @if (!($user->partnerInfo->plan_option_group) )
        <x-dashboard.card-item :title="__('partner.plan')">
            {{isset($user->partnerInfo->currentPlan) ? $user->partnerInfo->currentPlan->name : ''}}
        </x-dashboard.card-item>

        <x-dashboard.card-item :title="__('partner.choose_plan_option')">
            @foreach($planOptions as $item)
                <li class="li"><span>#</span> {{$item['name']}}</li>
            @endforeach
        </x-dashboard.card-item>

        <button role="button" id="edit" class="btn btn-primary">{{__('partner.choose')}}</button>
    @else
        <x-dashboard.card-item :title="__('partner.plan')">
            {{$user->partnerInfo->currentPlan->name}}

            @foreach($planOptions as $item)
                @if($item['group'] == $user->partnerInfo->plan_option_group)
                    <li class="li"><span>#</span> {{$item['name']}} </li>
                @endif
            @endforeach
        </x-dashboard.card-item>

        <button role="button" id="edit" class="btn btn-primary">{{__('partner.edit')}}</button>
    @endif
@endif

@push('footer')
    <script>
        let groupCurrent = '{{$user->partnerInfo->plan_option_group}}';
        $('ul.optionPlan li a.button').on('click', function () {
            $('.radio-item').append('<span class="checkmark"></span>');
            $('div.options #option_' + groupCurrent).click();
        });
    </script>
@endpush
