@extends('admin.admin')

@section('page')
page="settings"
@endsection

@section('title')
<title>{{ __('partybooker-cp.user-terms')}} | {{ __('partybooker-cp.www')}}</title>
@endsection

@section('summernote-css')
<link href="{{ asset('css/summernote.css') }}" rel="stylesheet">
<link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">

@endsection

@section('summernote-js')
<script src="{{ asset('js/summernote.js') }}"></script>
<script src="{{ asset('js/bootstrap.js')}}"></script>
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
				<h1>{{ __('partybooker-cp.user-terms')}}</h1>	
				<div class="lang-nav">
					<ul>
						<li lan="en">En</li>
						<li lan="fr">Fr</li>
					</ul>
				</div>
				<div class="terms-en lang-tab">
					<form method="POST" action="{{url(App\Http\Middleware\LocaleMiddleware::getLocale().'/cp/settings/edit-user-terms')}}">
						{{ csrf_field() }}
						<input type="text" name="lang" value="en" hidden />
						<textarea name="terms_en" id="terms_en">{{$settings[0]->user_terms_en}}</textarea>
						<button id="btn-terms">{{ __('partybooker-cp.save')}}</button>
					</form>
				</div>
				<div class="terms-fr lang-tab">
					<form method="POST" action="{{url(App\Http\Middleware\LocaleMiddleware::getLocale().'/cp/settings/edit-user-terms')}}">
						{{ csrf_field() }}
						<input type="text" name="lang" value="fr" hidden />
						<textarea name="terms_fr" id="terms_fr">{{$settings[0]->user_terms_fr}}</textarea>
						<button id="btn-terms">{{ __('partybooker-cp.save')}}</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
