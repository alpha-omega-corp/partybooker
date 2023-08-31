@extends('main')
@section('page')
page="cp"
@endsection

@section('title')
<title>CP | {{ __('partybooker-cp.www')}}</title>
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
				@if (Auth::user()->type == 'admin')
					@if (app()->getLocale() == 'en')
						<h1 class="m-145">{{$info[0]->en_company_name}}</h1>
					@else
						<h1 class="m-145">{{$info[0]->fr_company_name}}</h1>
					@endif
				@else
					<h1 class="m-145">Partner CP</h1>
				@endif
            </div>
        </div>
    </div>
    @include('common.social')
</section>

<section class="general-section partner-cp" data-type="{{Auth::user()->type}}">
	<div class="container">
		<div class="row">
			<div class="col-md-4 col-xl-3">
				@if ($errors->any())
					<div class="alert alert-danger">
						<ul>
							@foreach ($errors->all() as $error)
								<li>{{ $error }}</li>
							@endforeach
						</ul>
					</div>
				@endif
				<ul class="partner-nav">
					<li><a href="#" class="active" tab-nav="main">{{__('partner.home_page')}}</a></li>
					<li><a href="#" tab-nav="profile">{{__('partner.profile')}}</a></li>
					<li><a href="#" tab-nav="plan">{{__('partner.my_plan')}}</a></li>
					@if (Auth::user()->type != 'admin')
						<li><a href="#" tab-nav="faq">{{__('partner.faq')}}</a></li>
						<li><a href="#" tab-nav="terms">{{__('partner.provider_terms')}}</a></li>
						<li><a href="#" tab-nav="contacts">{{__('partner.contacts')}}</a></li>
					@endif
				</ul>

				@if (Auth::user()->type == 'admin')
					<a href="/cp/listing" class="button" > {{__('partner.back_to_list')}} </a>
				@endif
			</div>
			<div class="col-md-8 col-xl-9">
				@if ($note == 'updated')
					<span class="note">{{__('partner.changes_applied')}}</span>
				@endif

					@if ($message = Session::get('success'))

						<div class="alert alert-success alert-block">

							<button type="button" class="close" data-dismiss="alert">×</button>

							<strong>{{ $message }}</strong>

						</div>

					@endif


					@if ($message = Session::get('error'))

						<div class="alert alert-danger alert-block">

							<button type="button" class="close" data-dismiss="alert">×</button>

							<strong>{{ $message }}</strong>

						</div>

					@endif
                                        
				@include('partner.main')
				@include('partner.profile')
				@include('partner.plan')
				@if (Auth::user()->type != 'admin')
					@include('partner.faq')
					@include('partner.terms')
					@include('partner.contacts')
				@endif
			</div>
		</div>

	</div>
</section>
<section id="service" class="location">
	<div id="map" class="abs"
		data-lat="{{$info[0]->lat}}"
		data-lon="{{$info[0]->lon}}"
		data-code="{{__('cantons.'.strtolower($info[0]->location_code).'_loc')}}"
		data-address="{{$info[0]->address}}"
		data-icon="{{$info[0]->category_1}}"
		data-name="@if (app()->getLocale() == 'en'){{$info[0]->en_company_name}}@else{{$info[0]->fr_company_name}}@endif"
		data-cat="{{__('categories.'.$info[0]->category_1)}}"
		data-image="{{ asset('storage/images/'.$info[0]->main_img)}}">
	</div>
</section>
@endsection
