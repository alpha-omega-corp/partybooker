@php
    use App\Models\Category;
    use App\Models\AppPost;
    use Illuminate\Support\Facades\Auth;
@endphp

@extends('main')

@section('content')
    <x-card.listing :title="__('app.advert')" class="app-advert">
        <x-slot:breadcrumbs>
            {{Breadcrumbs::render('advert', $advert)}}
        </x-slot:breadcrumbs>

        <x-slot:information>
            <div class="advert-title">
                <x-app.title
                    :value="$advert->locale->title"
                    :size="TitleSize::SMALL"
                    :color="AppColor::PINK"
                />
                @include('app.listing.partials.advert.actions')

            </div>
        </x-slot:information>

        <x-slot:left>
            @include('app.listing.partials.advert.company')
            @include('app.listing.partials.advert.other')

        </x-slot:left>

        <x-slot:right>
            @include('app.listing.partials.service')
            @include('app.listing.partials.advert.gallery')
        </x-slot:right>
    </x-card.listing>
@endsection
