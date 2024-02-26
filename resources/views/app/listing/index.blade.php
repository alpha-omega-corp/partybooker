@extends('main')

@section('title')
    <title>{{ strtoupper(__('service.listings')) }} | {{ __('partybooker-cp.www') }}</title>
@endsection

@section('content')
    <div class="container app-listing">
        <div class="app-listing-header">
            <h1 class="display-1">
                {{ __('app.listing') }}
            </h1>

            {{Breadcrumbs::render('listing', Request::segments())}}
        </div>
        @include('app.listing.partials.listing')
    </div>

@endsection
