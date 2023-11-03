@php use App\Models\Advert; @endphp

<div class="option-active-content">
    @foreach($currentCategories as $key => $category)
        @php
            $advert = Advert::where('partners_info_id', \Illuminate\Support\Facades\Auth::user()->partnerInfo->id)
            ->where('view_name', $category->form_name)->first();
        @endphp

        <div class="category-option-card position-relative" x-data="{key: '{{$key}}'}"
             @click="openModalPrevent('editAdvert' + key)">

            <div class="text-uppercase fw-bold text-start w-100 p-2">
                {{$category->lang->name}}
            </div>

            <ul class="text-start">
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
                <x-dashboard.accordion
                    :title="'Hmm'"
                    :name="$advert->view_name">

                    @include('web.partner.advert.details.' . $advert->view_name, [
                    'iterator' => 1,
                    'advert' => $advert,
                ])
                </x-dashboard.accordion>
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



