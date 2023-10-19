@extends('admin.admin')

@section('page')
page="listing"
@endsection

@section('title')
<title>{{ __('partybooker-cp.listing')}} | {{ __('partybooker-cp.www')}}</title>
@endsection

@section('content')
<div id="page">
	<div class="container">
		<div class="filters" style="min-height: 650px">
			<div class="fil-cat">
				<h5>{{ __('partybooker-cp.choose_category')}}</h5>
				<select id="category-select">
					<option>{{ __('partybooker-cp.display_all')}}</option>
					@include('common.categories')
				</select>
			</div>
			<div class="fil-subcat">
				<h5>{{ __('partybooker-cp.choose_subcategory')}}</h5>
				<select id="subcategory-select">
					<option>{{ __('partybooker-cp.display_all')}}</option>
					@include('common.subcat1')
					@include('common.subcat2')
					@include('common.subcat3')
					@include('common.subcat4')
					@include('common.subcat5')
					@include('common.subcat6')
				</select>
			</div>
			<div class="fil-name">
				<h5>{{ __('partybooker-cp.filter_by_name')}}</h5>
				<input type="text" />
			</div>
			<div class="fil-location">
				<h5>{{ __('partybooker-cp.choose_location')}}</h5>
				<select id="location-select">
					<option>{{ __('partybooker-cp.display_all')}}</option>
					@include('common.cantons')
				</select>
			</div>
			<div class="fil-plan">
				<h5>{{ __('partybooker-cp.choose_yearly_plan')}}</h5>
				<select id="plan-select">
					<option>{{ __('partybooker-cp.display_all')}}</option>
					@foreach($plans as $plan)
					<option value="{{strtolower($plan->name)}}">{{\Lang::has('plan.' . strtolower($plan->name)) ? trans('plan.' . strtolower($plan->name)) : $plan->name }}</option>
					@endforeach
				</select>
			</div>
			<div class="fil-status">
				<h5>{{ __('partybooker-cp.choose_payment_status')}}</h5>
				<select id="status-select">
					<option>{{ __('partybooker-cp.display_all')}}</option>
					<option value="0">{{ __('partybooker-cp.not_payed')}}</option>
					<option value="1">{{ __('partybooker-cp.payed')}}</option>
				</select>
			</div>
			<button class="button">{{ __('partybooker-cp.filter')}}</button>
		</div>
		<div class="row">
			<div class="col-md-12">
				<h1>{{ __('partybooker-cp.listing')}}</h1>
				<a href="{{url(App\Http\Middleware\LocaleMiddleware::getLocale().'/cp/add-new-partner')}}" class="button list-btn">{{ __('partybooker-cp.add_new_partner')}}</a>
				<div class="filter">
					{{ __('partybooker-cp.filter')}}
				</div>

				<div class="sort">
					<div>{{ __('partybooker-cp.sort_by')}}</div>
					<ul>
						<li class="up" sort="name">{{ __('partybooker-cp.sort_name')}} &darr;</li>
						<li class="down" sort="name">{{ __('partybooker-cp.sort_name')}} &uarr;</li>
						<li class="down" sort="date">{{ __('partybooker-cp.sort_date')}} &uarr;</li>
						<li class="up" sort="expiration">{{ __('partybooker-cp.sort_exp_date')}} &darr;</li>
						<li class="down" sort="expiration">{{ __('partybooker-cp.sort_exp_date')}} &uarr;</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="services">
			@if ($errors->any())
				<div class="alert alert-danger">
					<ul>
						@foreach ($errors->all() as $error)
							<li>{{ $error }}</li>
						@endforeach
					</ul>
				</div>
			@endif
			@foreach($info as $key=>$service)
			<div class="service-block" num="{{$key+1}}" data-name="{{$service->en_company_name}}" data-location="{{$service->location_code}}" data-date="{{$service->created_at}}" data-plan="{{$service->plan}}" data-status="{{$service->payment_status}}" data-expiration="{{$service->expiration_date}}" data-category="{{$service->category_1}} {{$service->category_2}} {{$service->category_3}}">
				<div class="row">
					<div class="offset-md-1 col-md-10">
						<div class="row">
							<div class="col-lg">
								<h3>{{$service->en_company_name}}</h3>
								<h6>{{__('cantons.' . strtolower($service->location_code) . '_loc')}}</h6>
							</div>
							<a href="{{url(App\Http\Middleware\LocaleMiddleware::getLocale().'/cp/partner-cp/'.$service->id_partner)}}/statistics" class="button">{{ __('partybooker-cp.view_profile')}}</a>
							<a href="#" id="remove-partner" data-partner="{{$service->id_partner}}" class="button btn-remove">{{ __('partybooker-cp.remove_partner')}}</a>
						</div>
						<!-- <div class="clearfix"></div> -->
						<hr>
					</div>
				</div>
				<div class="row">
					<div class="offset-md-1 col-md-4">
						<span class="title">{{ __('partybooker-cp.contacts')}}</span>
						<p><span>ID:</span> {{$service->id_partner}}</p>
						<p><span>{{ __('partybooker-cp.name')}}</span> {{$service->name}}</p>
						<p><span>{{ __('partybooker-cp.email')}}</span> {{$service->email}}</p>
					</div>
					<div class="col-md-3">
						<span class="title">{{ __('partybooker-cp.status')}}</span>
						<p><span>{{ __('partybooker-cp.created_at')}}</span> {{$service->created_at}}</p>
						<p><span>{{ __('partybooker-cp.yearly_plan')}}</span> {{ \Lang::has('plan.' . $service->plan) ? trans('plan.' . $service->plan) : $service->plan }}</p>
						@if ($service->payment_status == 0)
						<p><span>{{ __('partybooker-cp.payment_status')}}</span> Not Payed</p>
						@else
						<p><span>{{ __('partybooker-cp.payment_status')}}</span> Payed</p>
						@endif
					</div>
					<div class="col-md-3">
						<span class="title">{{ __('partybooker-cp.payment')}}</span>
						<p><span>{{ __('partybooker-cp.payment_date')}}</span> {{$service->payed}}</p>
						<p><span>{{ __('partybooker-cp.payment_exp_date')}}</span> {{$service->expiration_date}}</p>
					</div>
				</div>
			</div>
			@endforeach
		</div>
		<div class="pagination">
			<ul></ul>
		</div>
	</div>
</div>
@endsection
@push('footer')
<script>
	$('.filters').hide();
	$(document).on('click', 'div.filter', function() {
		if ($(this).hasClass('open')) {
			$('.filters').show();
		} else {
			$('.filters').hide();
		}
	});

	$(document).on('click', 'a#remove-partner', function(e) {
		var $this = $(this);
		if (confirm('Do yo want to delete this partner?')) {
			$.ajax({
				url: '/cp/partner-remove',
				method: 'post',
				data: {
					id_partner: $(this).data('partner')
				},
				success: function() {
					$this.closest('div.service-block').remove();
				},
				error: function(r) {
					var data = JSON.parse(r.responseText);
					alert(data.message);
				}
			})
		}
		return false;
	});
</script>
@endpush
