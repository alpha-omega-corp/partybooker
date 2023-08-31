@extends('main')

@section('page')
	page="partner"
@endsection

@section('title')
	<title>{{__('become_partner.title')}} | {{ __('partybooker-cp.www')}}</title>
@endsection

@section('content')
	<section class="header not-full p-165">
		@include('common.header-nav')
		<div class="cover rel">
			<img src="/images/home-header-bg.jpg" class="bg abs" alt="Partybooker sélectionne les meilleures idées d'événements, de lieux et de services de Suisse romande.">
		</div>
		@include('common.social')
		<div class="title">
			<h1>{{__('become_partner.title')}}</h1>
			<button class="button register-btn">{{__('become_partner.register')}}</button>
		</div>
	</section>

	<section class="benefits">
		<div class="container">
			<div class="row mb-30">
				<div class="col-lg-4 offset-lg-1 img">
					<img src="/images/benefits1.jpg" alt="Devenir partenaire pour rendre votre présence web plus impactante"/>
				</div>
				<div class="col-lg-6">
					<h2>{{__('become_partner.benefits_title')}}</h2>
					<ul>
						<li>{{__('become_partner.b1')}}

							<div class="row">
								<div class="col-md-10 offset-md-1">
									<p>{{__('become_partner.b1_text')}}</p>
								</div>
							</div>

						<li>{{__('become_partner.b2')}}

							<div class="row">
								<div class="col-md-10 offset-md-1">
									<p>{{__('become_partner.b2_text')}}</p>
								</div>
							</div>
						</li>

						<li>{{__('become_partner.b3')}}

							<div class="row">
								<div class="col-md-10 offset-md-1">
									<p>{{__('become_partner.b3_text')}}</p>
								</div>
							</div>
						</li>
					</ul>
				</div>
			</div>

		</div>
	</section>

	<section class="packages">
		<div class="container">
			<div class="row">
				<div class="col-md-10 offset-md-1">
					<h2>{{__('become_partner.yearly_packages')}}</h2>
					<p class="text-center">{{__('become_partner.yp_text')}}</p>
				</div>
			</div>

			<div class="row justify-content-center">
				@foreach ($plans as $plan)
					@if(in_array(strtolower($plan->name), ['basic', 'commission', 'vip']))
						@continue;
					@endif

					<div class="package {{$plan->name}}">
						<div class="title">{{ __("plan.". strtolower($plan->name))}}</div>
						<ul>

							<li>
								@foreach($plan->options as $option)
									{{$option['name']}} @if(!$loop->last) or @endif
								@endforeach
							</li>

							<li>{{$plan->photos_num}} {{__('become_partner.photos')}}</li>
							@if ($plan->video == 1)
								<li>{{__('become_partner.video')}}</li>
							@endif
							@if ($plan->direct_request == 1)
								<li>{{__('become_partner.direct_request')}}</li>
							@endif
							<li>{{__('become_partner.langs')}}</li>
						</ul>
						<div class="price">
							<span>CHF {{$plan->price}}</span></br>
							{{__('become_partner.per_year')}}
						</div>
					</div>
				@endforeach

				<div class="package vip">
					<div class="title">VIP</div>
					<ul>
						<li>{{__('partner.vip_info1')}}</li>
						<li>{{__('partner.vip_info2')}}</li>
					</ul>
					<div class="price">
						<span>CHF 95</span></br>{{__('plan.per_month')}}
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="contactus">
		<div class="container">
			<span class="">{{__('become_partner.any_questions')}}</span>
			<button class="button" id="contactUs">{{__('become_partner.contact')}}</button>
		</div>
	</section>
	<section class="register">
		<div class="container">
			<div class="row">
				<div class="col-lg-10 offset-lg-1">
					<h3>{{__('become_partner.become_info_title')}}</h3>
					@if(app()->getLocale() == 'en')
						{!! __('become_partner.become_info_eng') !!}
					@else
						{!! __('become_partner.become_info') !!}
					@endif
					<button class="button register-btn">{{__('become_partner.register')}}</button>
				</div>
			</div>
		</div>
	</section>
	<section class="photos">
		<img src="/images/jay-wennington-2065-unsplash.jpg" alt="Partybooker augmente la visibilité de votre entreprise"/>
		<img src="/images/petr-sevcovic-594807-unsplash.jpg" alt="Partybooker améliore votre référencement sur les moteurs de recherche"/>
		<img src="/images/mitchell-orr-179532-unsplash.jpg" alt="Augmentation du taux de conversions des partenaires de Partybooker"/>
		<img src="/images/aneta-pawlik-651610-unsplash.jpg" alt="Obtenez des clients directement grâces à Partybooker"/>
	</section>
	<section class="terms">
		<div class="container">
			<div class="row justify-content-center">
				<span>{{__('become_partner.provider_service')}}</span>
				<a href="{{url(App\Http\Middleware\LocaleMiddleware::getLocale().'/' .__('urls.partner-terms'))}}" class="button"
				   target="_blank">{{__('become_partner.view')}}</a>
			</div>
		</div>
	</section>
	@include('common.partner-register')
	@include('common.partner-phone')
@endsection
