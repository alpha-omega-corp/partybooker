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
            <div class="pt-4">
                {{Breadcrumbs::render('advert', $advert)}}
            </div>
        </x-slot:breadcrumbs>

        <x-slot:left>
            @include('app.listing.partials.advert.actions')

            <div class="app-advert-thumbnail">
                <img src="{{asset($advert->images()->thumbnail()->first()->path)}}"
                     alt="{{$advert->locale->title}}">
            </div>

        </x-slot:left>

        <x-slot:right>
            @include('app.listing.partials.advert.description')
            @include('app.listing.partials.advert.service')
            @include('app.listing.partials.advert.gallery')
            @include('app.listing.partials.service.partials.rates')

            @include('app.listing.partials.service.partials.schedule', [
                'center' => true,
                'canOpen' => true,
            ])

            @include('app.listing.partials.service.partials.payments', [
                'center' => true,
                'canOpen' => true,
            ])

            @include('app.listing.partials.advert.contacts')
            @include('app.listing.partials.advert.other')
        </x-slot:right>
    </x-card.listing>
@endsection
