@extends('admin.admin')

@section('page')
page="settings"
@endsection

@section('title')
<title>{{ __('partybooker-cp.profile')}} | {{ __('partybooker-cp.www')}}</title>
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
				<h1>{{ __('partybooker-cp.profile')}}</h1>
				<h4>{{ __('partybooker-cp.logged_in')}} <?php echo Auth::user()->name; ?></h4>
				<p>{{ __('partybooker-cp.your_email')}} <span class="email"><?php echo Auth::user()->email; ?></span></p>
				<p>{{ __('partybooker-cp.your_email_desc')}}</p>
				<p>{{ __('partybooker-cp.click_to_edit')}}</p>
				<a href="#" id="edit-profile-btn" class="button">{{ __('partybooker-cp.button_edit_profile')}}</a>
				<h4>{{ __('partybooker-cp.list_admins')}}</h4>
				<ul class="admin-list">
					@foreach ($users as $user)
						@if ($user->type === 'admin')
							<li>ID: {{$user->id}}
								<ul>
									<li>{{ __('partybooker-cp.name')}} {{$user->name}}</li>
									<li>{{ __('partybooker-cp.email')}} {{$user->email}}</li>
								</ul>
							</li>
						@endif
					@endforeach
				</ul>
			</div>
		</div>
	</div>
</div>
@include('admin.popups.edit-profile')
@endsection
