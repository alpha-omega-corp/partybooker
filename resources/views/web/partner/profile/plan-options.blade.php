@php use App\Models\PartnerPlanOption;use App\Models\PlanOption; @endphp
<div class="row pb-4">
    @foreach($planOptions as $key => $option)
        @php
            $inactiveOption = PlanOption::where('group', $option['group'])
                ->where('plans_id', \Illuminate\Support\Facades\Auth::user()->partnerInfo->plans_id)
                ->first();
        @endphp


        @if($option['group'] == $user->partnerInfo->plan_option_group)
            <div class="col-md-6 order-first">
                <div class="plan-option plan-option-active shadow-lg">
                    <div class="bg-accent d-flex">
                        <h6 class="fw-bold text-start text-white p-3 m-0 text-uppercase w-100">
                            {{$inactiveOption->categories_count . ' ' . __('partner.category')}}
                            <br>
                            {{$inactiveOption->sub_categories_count . ' ' . __('partner.subcategory')}}
                        </h6>
                        <div
                            class="d-flex justify-content-end align-items-center text-white">
                            @svg('heroicon-o-cube-transparent', 'plan-active-icon')
                        </div>

                    </div>


                    <div class=" p-3 position-relative">
                        @include('web.partner.profile.category')

                        <div class="edit-category">
                            @include('web.partner.popup.edit-category')
                        </div>
                    </div>
                </div>
            </div>
        @else
            <div class="col">
                <div class="plan-option plan-option-inactive d-flex justify-content-center align-items-center shadow-lg"
                     x-data="" @click="document.getElementById('editOption-button').click()">


                    <div class="text-uppercase text-gray text-center p-4">
                        @svg('heroicon-o-cube-transparent')
                        <p>
                            <span>{{$inactiveOption->categories_count}}</span>
                            <span>{{__('partner.categories')}}</span>
                            <br>
                            <span>{{$inactiveOption->sub_categories_count}}</span>
                            <span>{{__('partner.subcategory')}}</span>
                        </p>
                    </div>
                </div>
            </div>

        @endif
    @endforeach
</div>

@include('web.partner.popup.edit-option')


