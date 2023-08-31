@extends('admin.admin')

@section('page')
page="settings"
@endsection

@section('title')
<title>{{ __('partybooker-cp.contacts')}} | {{ __('partybooker-cp.www')}}</title>
@endsection

@section('content')
<div id="page">
	<div class="container">
		<div class="row">
			<div class="col-md-3 border-right">
				<div class="messages">
					<div class="success">{{ __('partybooker-cp.edit_success')}}</div>
					<div class="error">{{ __('partybooker-cp.edit_error')}}</div>
				</div>
				@include('admin.settings.nav')
			</div>
			<div class="col-md-9">
				@if ($errors->any())
					<div class="alert alert-danger">
						<ul>
							@foreach ($errors->all() as $error)
								<li>{{ $error }}</li>
							@endforeach
						</ul>
					</div>
				@endif
				<h1>{{ __('partybooker-cp.contacts_detail')}}</h1>
								
				<ul class="contacts">
					<li>
						<form method="POST" action="{{url(App\Http\Middleware\LocaleMiddleware::getLocale().'/cp/settings/edit-address')}}">
							{{ csrf_field() }}
							<label>{{ __('partybooker-cp.p_address')}}</label>
							<input type="text" name="address" value="{{$settings[0]->address}}" required>
							<button>{{ __('partybooker-cp.save')}}</button>
						</form>
					</li>
					
					<li>
						<form method="POST" action="{{url(App\Http\Middleware\LocaleMiddleware::getLocale().'/cp/settings/edit-email')}}">
							{{ csrf_field() }}
							<label>{{ __('partybooker-cp.p_email')}}</label>
							<input type="email" name="email" value="{{$settings[0]->email}}" required>
							<button>{{ __('partybooker-cp.save')}}</button>
						</form>
					</li>
					
					<li>
						<form method="POST" action="{{url(App\Http\Middleware\LocaleMiddleware::getLocale().'/cp/settings/edit-phone')}}">
							{{ csrf_field() }}
							<label>{{ __('partybooker-cp.p_phone')}}</label>
							<input type="tel" name="phone" value="{{$settings[0]->phone}}" required>
							<button>{{ __('partybooker-cp.save')}}</button>
						</form>
					</li>
					
					<li>
						<form method="POST" action="{{url(App\Http\Middleware\LocaleMiddleware::getLocale().'/cp/settings/edit-fb')}}">
							{{ csrf_field() }}
							<label>{{ __('partybooker-cp.p_facebook')}}</label>
							<input type="url" name="fb" value="{{$settings[0]->facebook}}">
							<button>{{ __('partybooker-cp.save')}}</button>
						</form>
					</li>
					
					<li>
						<form method="POST" action="{{url(App\Http\Middleware\LocaleMiddleware::getLocale().'/cp/settings/edit-ln')}}">
							{{ csrf_field() }}
							<label>{{ __('partybooker-cp.p_linkedin')}}</label>
							<input type="url" name="ln" value="{{$settings[0]->linkedin}}">
							<button>{{ __('partybooker-cp.save')}}</button>
						</form>
					</li>
					
					<li>
						<form method="POST" action="{{url(App\Http\Middleware\LocaleMiddleware::getLocale().'/cp/settings/edit-inst')}}">
							{{ csrf_field() }}
							<label>{{ __('partybooker-cp.p_instagram')}}</label>
							<input type="url" name="inst" value="{{$settings[0]->instagram}}">
							<button>{{ __('partybooker-cp.save')}}</button>
						</form>
					</li>
					
					<li>
						<form method="POST" action="{{url(App\Http\Middleware\LocaleMiddleware::getLocale().'/cp/settings/edit-gl')}}">
							{{ csrf_field() }}
							<label>{{ __('partybooker-cp.p_google')}}</label>
							<input type="url" name="gl" value="{{$settings[0]->googleplus}}">
							<button>{{ __('partybooker-cp.save')}}</button>
						</form>
					</li>
					
					<li>
						<form method="POST" action="{{url(App\Http\Middleware\LocaleMiddleware::getLocale().'/cp/settings/edit-tw')}}">
							{{ csrf_field() }}
							<label>{{ __('partybooker-cp.p_twitter')}}</label>
							<input type="url" name="tw" value="{{$settings[0]->twitter}}">
							<button>{{ __('partybooker-cp.save')}}</button>
						</form>
					</li>
					
				</ul>
			</div>
		</div>
	</div>
</div>
@endsection
