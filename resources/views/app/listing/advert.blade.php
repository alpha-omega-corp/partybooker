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
            </div>
        </x-slot:information>

        <x-slot:left>
            @include('app.listing.partials.advert.company')
        </x-slot:left>

        <x-slot:right>
            @include('app.listing.partials.service.partials.description', ['advert' => $advert])
            @include('app.listing.partials.service.partials.rates', ['advert' => $advert])
            @include('app.listing.partials.advert.gallery')
            @include('app.listing.partials.service-content', ['content' => $advert->service->serviceable])


            @include('app.listing.partials.service.partials.payments')
            @include('app.listing.partials.service.partials.deposit')
            @include('app.listing.partials.service.partials.budget')


        </x-slot:right>
    </x-card.listing>
@endsection
