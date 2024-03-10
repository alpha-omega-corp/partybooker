@extends('main')

@section('title')
    <title>{{ strtoupper(__('service.listings')) }} | {{ __('partybooker-cp.www') }}</title>
@endsection

@section('content')
    <div class="app-listing">
        <x-card.listing :title="__('app.listing')">
            <x-slot:header>
                {{Breadcrumbs::render('listing', Request::segments())}}
            </x-slot:header>

            <x-slot:categories>
                @include('app.listing.partials.category')
            </x-slot:categories>

            @include('app.listing.partials.search')
            <div class="listing-content-pagination">
                {{$adverts->links()}}
            </div>

            @include('app.listing.partials.listing')
        </x-card.listing>
    </div>
@endsection
