@php use App\Models\PartnerPlanOption;use App\Models\PlanOption; @endphp

@props([
    'categories',
    'partnerCategories',
    'options',
    'partnerOptions',
    'partner'
])


<div class="plan-options-item-card">
    <div class="d-flex justify-content-around">

        @foreach($options as $key => $option)
            @php
                $indexOption = PlanOption::where('group', $option['group'])
                    ->where('plans_id', $partner->plans_id)
                    ->first();
            @endphp

            <div
                class="plan-option-item {{$option['group'] === $partner->plan_option_group ? 'plan-options-item-active' : ''}}"
                x-data="{key: '{{$key}}'}"
                @click="
                        document.getElementById('option_' + key).click();
                        document.getElementById('editOption-button').click();
                    "
                data-tippy-content="{{__('form.switch')}}">

                <div class="text-uppercase text-center d-flex justify-content-start">
                    <div>
                        @svg('heroicon-o-newspaper')
                    </div>
                    <div class="option-description">
                        <small>
                            {{$indexOption->categories_count}}
                            {{Str::plural(__('partner.category'), $indexOption->categories_count)}}
                        </small>

                        <small>
                            {{$indexOption->sub_categories_count}}
                            {{Str::plural(__('partner.subcategory'), $indexOption->sub_categories_count)}}
                        </small>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

@include('web.partner.popup.edit-option')
