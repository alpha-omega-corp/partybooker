@extends('main')

@section('title')
<title>{{ __('partybooker-cp.not_verified')}} | {{ __('partybooker-cp.www')}}</title>
@endsection

@section('content')
<section class="header not-full">
    @include('common.header-nav')
    <div class="cover abs">
        <img src="/images/home-header-bg.jpg" class="bg abs" alt="Partybooker sélectionne les meilleures idées d'événements, de lieux et de services de Suisse romande.">
    </div>
    <div class="container">
		<h1>{{ __('partybooker-cp.not_verified')}}</h1>
    </div>
    @include('common.social')
</section>
<section class="general-section">
	<div class="container">
		<h2>{{ __('partybooker-cp.check_email')}}</h2>
		<p>{{ __('partybooker-cp.was_sent')}}</p>
	</div>
</section>
@endsection