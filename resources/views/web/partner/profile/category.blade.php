@php use App\Models\Advert; @endphp

<div class="option-active-content">
    @foreach($currentCategories as $iterator => $category)
        @php
            $advert = Advert::where('partners_info_id', \Illuminate\Support\Facades\Auth::user()->partnerInfo->id)
            ->where('view_name', $category->form_name)->first();
        @endphp

        <div class="category-option-card position-relative" x-data="{key: '{{$iterator}}'}"
             @click="openModalPrevent('editAdvert' + key)">

            <div class="text-uppercase fw-bold text-start w-100 p-2">
                {{$category->lang->name}}
            </div>

            <ul class="text-start category-option-ul">
                <ul>
                    @foreach($category->subCategories as $sub)
                        <li>{{$sub->lang->name}}</li>
                    @endforeach
                </ul>
            </ul>

            @if ($advert->status == Advert::STATUS_DRAFT)
                <hr>
                @include('web.partner.partials.dashboard.option-adverts')
            @else

                <hr>
                <x-partner.service-details :advert="$advert" :partner="$user->partnerInfo" :iterator="$iterator"/>

            @endif
        </div>

        @if(!$loop->last)
            <hr>
        @endif
    @endforeach
</div>

@if ($user->partnerInfo->currentPlan &&
     $user->partnerInfo->categories->count() > 0 &&
      !in_array(strtolower($user->partnerInfo->currentPlan->name), ['basic', 'commission']))
    @include('web.partner.profile.service-details')
@endif



