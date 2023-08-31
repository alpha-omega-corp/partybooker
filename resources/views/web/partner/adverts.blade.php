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
						@if(\Auth::user()->type == 'admin')
							<li><a href="{{url(\App\Http\Middleware\LocaleMiddleware::getLocale().'/cp/partner-cp/'.$user->id_partner)}}">{{__('main.home_page')}}</a></li>
							<li><a href="{{url(\App\Http\Middleware\LocaleMiddleware::getLocale().'/cp/partner-cp/'.$user->id_partner)}}/profile">{{__('partner.profile')}}</a></li>
							<li><a href="{{url(\App\Http\Middleware\LocaleMiddleware::getLocale().'/cp/partner-cp/'.$user->id_partner)}}/plans">My plan</a></li>
						@else
							<li><a href="{{url(\App\Http\Middleware\LocaleMiddleware::getLocale().'/partner-cp/'.$user->id_partner)}}">Main</a></li>
							<li><a href="{{url(\App\Http\Middleware\LocaleMiddleware::getLocale().'/partner-cp/'.$user->id_partner)}}/profile">Profile</a></li>
							<li><a href="{{url(\App\Http\Middleware\LocaleMiddleware::getLocale().'/partner-cp/'.$user->id_partner)}}/adverts" class="active">Services</a></li>
							<li><a href="{{url(\App\Http\Middleware\LocaleMiddleware::getLocale().'/partner-cp/'.$user->id_partner)}}/plans">My plan</a></li>
							<li><a href="{{url(\App\Http\Middleware\LocaleMiddleware::getLocale().'/partner-cp/'.$user->id_partner)}}/faq">FAQ</a></li>
							<li><a href="{{url(\App\Http\Middleware\LocaleMiddleware::getLocale().'/partner-cp/'.$user->id_partner)}}/terms">Service Provider Terms & Conditions</a></li>
							<li><a href="{{url(\App\Http\Middleware\LocaleMiddleware::getLocale().'/partner-cp/'.$user->id_partner)}}/contacts">Contacts</a></li>
						@endif
					</ul>

					@if (Auth::user()->type == 'admin')
						<a href="/cp/listing" class="button"> Back to list </a>
					@endif
				</div>
				<div class="col-md-8 col-xl-9">
					@if ($errors->any())
						<div class="alert alert-danger alert-block">
							<button type="button" class="close" data-dismiss="alert">×</button>
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
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

					@if($user->has_free_options)
						@include('web.partner.advert.use-plan-option')
					@endif


					@include('web.partner.adverts-list', ['adverts' => $adverts])
{{--					@include('web.partner.profile.category-images')--}}
				</div>
			</div>

		</div>
	</section>
@endsection
@push('footer')
	<script>
		$('a.new-service').on('click', function (e) {
			e.preventDefault();
			$('.create-service').fadeIn();
		});

		var categories = [];

		$.ajax({
			url: '{{url(App\Http\Middleware\LocaleMiddleware::getLocale()."/categories")}}',
			method: 'get',
			success: function(data){
				categories = data;
				categories.forEach(function (item, index) {
					$('select#category').append('<option value="' + item.id + '">'+ item.lang.name +'</option>')
				});

				$('select#partner-options').trigger('change');
			},
			error: function(r){

			},
		});

		$.ajax({
			url: '{{url(App\Http\Middleware\LocaleMiddleware::getLocale()."/partner/".$user->id_partner .'/plan-options')}}',
			method: 'get',
			success: function(data){
				data.forEach(function (item, index) {
					$('select#partner-options').append('<option data-subcat-count="'+item.sub_categories_count+'" value="' + item.id + '">'+ item.categories_count +'cat ' + item.sub_categories_count + 'subcat </option>')
				});
				$('select#partner-options').trigger('change');
			},
			error: function(r){

			},
		});

		$('select#partner-options').on('change', function(e){
			e.preventDefault();
			var subCategoriesCount = parseInt($(this).find('option:selected').data('subcat-count'));
			var category = $('select#category option:selected').val();
			var options = [];

			categories.forEach(function (item, index) {
				if(category == item.id){
					options = item.sub_categories;
				}
			});

			var optList = '';
			options.forEach(function (item, index) {
				optList = optList + '<option value="' + item.id + '">' + item.lang.name + '</option>';
			});

			$("div.sub-list").html('');
			for(var i = 1; i <= subCategoriesCount; i++) {
				$("div.sub-list").append('<div class="categories subcat_1"><label class="select">Sub-category: </label>' +
					'<select name="sub_category[]">' + optList + '</select>' +
					'</div>');
			}
			return false;
		});

		$('select#category').on('change', function (e) {
			$('select#partner-options').trigger('change');
		});


	</script>
@endpush
