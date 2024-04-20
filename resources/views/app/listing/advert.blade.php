@php
    use App\Models\Category;
    use App\Models\AppPost;
    use Illuminate\Support\Facades\Auth;
@endphp

@extends('main')

@section('content')
    <x-card.listing
        :title="$advert->category->locale->title"
        :title-color="AppColor::BLUE"
        class="app-advert">
        <x-slot:breadcrumbs>
            {{Breadcrumbs::render('advert', $advert)}}
        </x-slot:breadcrumbs>

        <x-slot:left>
            @include('app.listing.partials.advert.company')
        </x-slot:left>

        <x-slot:right>
            @include('app.listing.partials.advert.actions')
            @include('app.listing.partials.service.partials.description', ['advert' => $advert])
            @include('app.listing.partials.service.partials.rates', ['advert' => $advert])
            @include('app.listing.partials.advert.gallery')

            @include('app.listing.partials.advert.service')

            @include('app.listing.partials.service.partials.schedule')
            @include('app.listing.partials.service.partials.payments')
            @include('app.listing.partials.advert.contacts')
            @include('app.listing.partials.advert.other')


        </x-slot:right>
    </x-card.listing>
@endsection
