@php use App\Http\Middleware\LocaleMiddleware; @endphp
@extends('main')
@section('page')
    page="cp"
@endsection

@section('title')
    <title>Advert | {{ __('partybooker-cp.www')}}</title>
@endsection

@section('content')
    @if(Auth::user()->isAdmin())
        <a href="/cp" class="btn btn-orange">
            CP
        </a>
    @endif

    @include('app.partner.partials.plan')

@endsection
