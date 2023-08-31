@extends('main')

@section('page')
	page="listing"
@endsection

@section('title')
	<title>{{strtoupper(__('service.listings'))}} | {{ __('partybooker-cp.www')}}</title>
@endsection


@push('header')
	<style>

		.list-section h1 {
			text-align: center !important;
			margin-bottom: 40px !important;

		}
		h1 {
			font-size: 30px !important;
			letter-spacing: 1px !important;
			line-height: 45px !important;
			color: #fe8a02 !important;
			font-family: "Montserrat" !important;
			font-weight: 700 !important;
			text-transform: uppercase !important;
		}
	</style>
@endpush
@section('content')
	<section class="header not-full">
		@include('web.common.header-nav')
		<div class="cover abs">
			<img src="/images/home-header-bg.jpg" class="bg abs" alt="Partybooker sélectionne les meilleures idées d'événements, de lieux et de services de Suisse romande.">
		</div>
		@include('web.common.social')
	</section>

	<section class="list-section">
		<div class="container p-relative">
			@php
				$url =  url(App\Http\Middleware\LocaleMiddleware::getLocale(). '/' . __('urls.listings'));
			@endphp

			<a href="{{$url}}" class="back">
				<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 11" width="16" height="11">
					<defs>
						<image width="16" height="11" id="img1"
						       href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAALCAMAAABBPP0LAAAAAXNSR0IB2cksfwAAAEhQTFRFAAAA/YkB/YkB/YkB/YkB/YkB/YkB/YkB/YkB/YkB/YkB/YkB/YkB/YkB/YkB/YkB/YkB/YkB/YkB/YkB/YkB/YkB/YkB/YkBpnK28gAAABh0Uk5TAB/jRij37hIz6xQ1+ugMQ/vpKgr/5+pFy0o7KAAAAERJREFUeJxjYAACRiZmBmTAwsrGjsznYOXkQuZz8/DyIfP5BQSFGBFAmEFQBAWIAlXwoqrAMANkixgXqgi6O0AuFYezARJlAvgnuCj6AAAAAElFTkSuQmCC"/>
					</defs>
					<style>
						tspan {
							white-space: pre
						}
					</style>
					<use id="right-arrow copy" href="#img1" x="0" y="0"/>
				</svg>
				{{__('service.back')}}</a>

			<br>
			<br>
			<nav aria-label="">
				<ol class="breadcrumb" style="color: #fe8a02; background: transparent">
					@if(!isset($current))
						<li class="breadcrumb-item" aria-current="page">
							<a href="{{url(App\Http\Middleware\LocaleMiddleware::getLocale() . '/' )}}">Home</a>
						</li>
						<li class="breadcrumb-item active" aria-current="page">
							<a href="#">{{__('service.listings')}}</a>
						</li>
					@endif
				</ol>
			</nav>

			<h1>
				@if(isset($current))
					{{__('categories.'.$current->code)}}
				@else
					{{__('service.listings')}}
				@endif
			</h1>
			<div class="row justify-content-center">
				<div class="col-lg-3 col-sm-6 filters">

					<div class="dropdown">
						<button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown"
						        aria-haspopup="true" aria-expanded="false">
							{{__('listing.sort_by')}}
						</button>
						@include('web.listings.partial.sort-by')
					</div>

					@include('web.common.category-filter')

					<h6>{{__('partner.budget')}}:</h6>
{{--					@include('web.listings.partial.price-range')--}}
					@include('web.listings.partial.budget-filter')

					@include('web.common.event-types-filter')
				</div>
				<div class="col-lg-9 col-md-12">
					@include('web.listings.partial.partial-list')
				</div>
			</div>
		</div>
	</section>

	<section class="location">
		<div id="map" class="abs"></div>
		<div class="container">
			<ul>
				@foreach($categories as $item)
					<li>
						<a href="{{url(App\Http\Middleware\LocaleMiddleware::getLocale().'/'. __('urls.listings') .'/' . $item->lang->slug )}}">{{$item->lang->name}}</a>
					</li>
				@endforeach
				<li><a href="#">{{__('categories.agency')}}</a></li>
				<li>
					<a href="{{url(App\Http\Middleware\LocaleMiddleware::getLocale().'/'. __('urls.listings'))}}">{{__('main.all')}}</a>
				</li>
			</ul>
		</div>

	</section>
@endsection

@include('web.listings.partial.map')
