@extends('main')

@section('page')
page="terms"
@endsection

@section('title')
<title>{{strtoupper(__('main.user_terms'))}} | {{ __('partybooker-cp.www')}}</title>
@endsection

@section('content')
<section class="header not-full">
        @include('common.header-nav')
        <div class="cover abs">
            <img src="/images/home-header-bg.jpg" class="bg abs" alt="Partybooker sélectionne les meilleures idées d'événements, de lieux et de services de Suisse romande.">
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <h1>{{strtoupper(__('main.user_terms'))}}</h1>
                </div>
            </div>
        </div>
        @include('common.social')
    </section>

    <section class="terms-section">
        <div class="container">
            <div class="row">
                <div class="col-md-10 offset-md-1">
					@if (app()->getLocale() == 'en')
						{!!$en_terms!!}
					@else 
						{!!$fr_terms!!}
					@endif 
				</div>
            </div>
        </div>
    </section>
@endsection
