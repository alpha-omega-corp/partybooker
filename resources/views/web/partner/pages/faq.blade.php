@extends('main')
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
        <img src="/images/home-header-bg.jpg" class="bg abs" alt="Partybooker sélectionne les meilleures idées d'événements, de lieux et de services de Suisse romande.">
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

<section class="general-section partner-cp" data-type="{{Auth::user()->type}}">
	<div class="container">
		<div class="row">
			<div class="col-md-4 col-xl-3">
				<ul class="partner-nav">
					<ul class="partner-nav">
						@if(\Auth::user()->type == 'admin')
							<li><a href="{{url(\App\Http\Middleware\LocaleMiddleware::getLocale().'/cp/partner-cp/'.$user->id_partner)}}">{{__('partner.home_page')}}</a></li>
							<li><a href="{{url(\App\Http\Middleware\LocaleMiddleware::getLocale().'/cp/partner-cp/'.$user->id_partner)}}/profile" >{{__('partner.profile')}}</a></li>
							<li><a href="{{url(\App\Http\Middleware\LocaleMiddleware::getLocale().'/cp/partner-cp/'.$user->id_partner)}}/plans">{{__('partner.my_plan')}}</a></li>
						@else
							<li><a href="{{url(\App\Http\Middleware\LocaleMiddleware::getLocale().'/partner-cp/'.$user->id_partner)}}">{{__('partner.home_page')}}</a></li>
							<li><a href="{{url(\App\Http\Middleware\LocaleMiddleware::getLocale().'/partner-cp/'.$user->id_partner)}}/profile">{{__('partner.profile')}}</a></li>
							<li><a href="{{url(\App\Http\Middleware\LocaleMiddleware::getLocale().'/partner-cp/'.$user->id_partner)}}/plans">{{__('partner.my_plan')}}</a></li>
							<li><a href="{{url(\App\Http\Middleware\LocaleMiddleware::getLocale().'/partner-cp/'.$user->id_partner)}}/faq" class="active">{{__('partner.faq')}}</a></li>
							<li><a href="{{url(\App\Http\Middleware\LocaleMiddleware::getLocale().'/partner-cp/'.$user->id_partner)}}/terms">{{__('partner.provider_terms')}}</a></li>
							<li><a href="{{url(\App\Http\Middleware\LocaleMiddleware::getLocale().'/partner-cp/'.$user->id_partner)}}/contacts">{{__('partner.contacts')}}</a></li>
						@endif
					</ul>
				</ul>

			</div>
			<div class="col-md-8 col-xl-9">
					@include('web.partner.faq')
			</div>
		</div>

	</div>
</section>
@endsection
