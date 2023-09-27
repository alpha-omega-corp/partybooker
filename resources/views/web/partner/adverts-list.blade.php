<div class="tab" tab="profile" style="display: block">
    <div class="profile-info">
        @foreach ($adverts as $k => $advert)
            @if ($advert->status == \App\Models\Advert::STATUS_DRAFT)
                <ul class="serviceDetails{{ $k + 1 }} attention">
                    <li block="serviceDetails{{ $k + 1 }}">
                        <h4>{{ __('partner.service_details') }} #{{ $k + 1 }}: </h4>
                    </li>
                    <li class="li">{{ __('partner.fill_service_details') }}</li>
                    <li class="li"><a href="#" class="button fulfilDetails">{{ __('partner.edit') }}</a></li>
                </ul>
                @include('web.partner.advert.create-forms.' . $advert->view_name)
            @elseif($advert->status == \App\Models\Advert::STATUS_INACTIVE)
                <ul class="serviceDetails{{ $k + 1 }}">
                    <li block="serviceDetails{{ $k + 1 }}">
                        <h4>{{ __('partner.service_details') }} #{{ $k + 1 }}: </h4>
                    </li>
                    <li class="li">{{ __('partner.fill_service_details') }}</li>
                    <li class="li"><a href="#" class="button fulfilDetails">{{ __('partner.edit') }}</a></li>
                </ul>
            @else
                @include('web.partner.advert.details.' . $advert->view_name, [
                    'iterator' => $k + 1,
                    'advert' => $advert,
                ])
            @endif
        @endforeach
        {{--		@include('partner.profile.category-images') --}}
    </div>
</div>


@push('header')
    <link rel="stylesheet" href="{{ asset('plugins/kendo/kendo.common.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/kendo/kendo.default.min.css') }}">
@endpush

@push('footer')
    <script src="{{ Vite::image('plugins/kendo/kendo.all.min.js') }}"></script>
@endpush
