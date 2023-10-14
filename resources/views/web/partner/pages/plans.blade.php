@php use App\Http\Middleware\LocaleMiddleware; @endphp
@extends('web.main')
@section('page')
    page="cp"
@endsection

@section('title')
    <title>CP | {{ __('partybooker-cp.www')}}</title>
@endsection

@section('content')

    <section class="header not-full">
        @include('web.common.header-nav')
        <div class="cover abs">
            <img src="/images/home-header-bg.jpg" class="bg abs"
                 alt="Partybooker sélectionne les meilleures idées d'événements, de lieux et de services de Suisse romande.">
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    @if (Auth::user()->type == 'admin')
                        @if (app()->getLocale() == 'en')
                            <h1 class="m-145">{{$user->partnerInfo->en_company_name}}</h1>
                        @else
                            <h1 class="m-145">{{$user->partnerInfo->fr_company_name}}</h1>
                        @endif
                    @else
                        <h1 class="m-145">Partner CP</h1>
                    @endif
                </div>
            </div>
        </div>
        @include('web.common.social')
    </section>

    @include('web.partner.plan')
@endsection
