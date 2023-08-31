@extends('admin.admin')

@section('page')
	page="settings"
@endsection

@section('title')
	<title>{{ __('partybooker-cp.plans')}} | {{ __('partybooker-cp.www')}}</title>
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

					@if ($message = Session::get('error'))
						<div class="alert alert-danger">
							<ul>
								<li>{{ $message }}</li>
							</ul>
						</div>
					@endif

					<h1>{{ __('partybooker-cp.plans')}}</h1>
					<a href="#" id="new-plan-btn" class="button">{{ __('partybooker-cp.button_new_plan')}}</a>

					<table class="plans-list">
						<tr>
							<th>ID</th>
							<th>{{ __('partybooker-cp.t_name')}}</th>
							<th>{{ __('partybooker-cp.t_position')}}</th>
							<th>{{ __('partybooker-cp.t_listings')}}</th>
							<th>{{ __('partybooker-cp.t_photos')}}</th>
							<th>{{ __('partybooker-cp.t_video')}}</th>
							<th>{{ __('partybooker-cp.t_request')}}</th>
							<th>{{ __('partybooker-cp.t_price')}}</th>
							<th></th>
						</tr>
						@foreach ($plans as $key => $plan)
							<tr>
								<td>{{$key+1}}<br>
									<span class="btn-edit-plan" plan="{{$plan->id}}" row="{{$key+2}}">{{ __('partybooker-cp.t_edit')}}</span>
								</td>
								<td>{{$plan->name}}</td>
								<td pos="{{$plan->position}}">{{$plan->position}}</td>
								<td>
									@foreach($plan->options ?? [] as $group => $options)
										@foreach($options as $option)
											{{$option->categories_count}} cat. {{$option->sub_categories_count}}
											sub.cat. per cat.
											@if(!$loop->last)
												and
											@endif
										@endforeach
										@if(!$loop->last)
											<br> or
										@endif
									@endforeach
								</td>
								<td>{{$plan->photos_num}}</td>
								<td>{{$plan->video}}</td>
								<td>{{$plan->direct_request}}</td>
								<td>{{$plan->price}}</td>
								<td><a class="remove-plan" href="/cp/settings/plans/{{$plan->id}}/remove" data-id="{{$plan->id}}"><span>X</span></a></td>
							</tr>
						@endforeach
					</table>
				</div>
			</div>
		</div>
	</div>
	@include('admin.popups.new-plan')
	@include('admin.popups.edit-plan')
@endsection

@push('footer')
	<script>
		$(document).on('change', '#select-position', function () {
			if ($(this).val() === '') {
				$('form#edit-plan #position-input').show().prop('disabled', 0);
				return;
			}
			$('form#edit-plan #position-input').hide().prop('disabled', 1);
		});


		$(document).on('click', 'a.remove-plan-option', function (e) {
			e.preventDefault();
			$(this).closest('td').closest('tr').remove();
			return false;
		});

		$('form#edit-plan').submit(function (e) {
			e.preventDefault();
			var form = $(this);

			$.ajax({
				type: "POST",
				url: form.attr('action'),
				data: form.serialize(),
				success: function (data) {
					$('.messages-list').css('color', '#049003');
					$('.messages-list').text(data.message);
					document.location.reload();
				},
				error: function (r) {
					var data = JSON.parse(r.responseText);
					$('.messages-list').css('color', '#ff001c');
					$('.messages-list').text(data.message);
					$('#fs').attr('disabled', false)
				}
			});

			return false;
		});


		$('#select-position').change(function () {
			if ($(this).val() === '') {
				$('#position-input').show().prop('disabled', 0);
				return;
			}
			$('#position-input').hide().prop('disabled', 1);
		});

		$(document).on('click', 'a.remove-plan-option', function (e) {
			e.preventDefault();
			$(this).closest('td').closest('tr').remove();
			return false;
		});

		$('td.add-plan-option').on('click', function (e) {
			e.preventDefault();
			var count = $('table.plan-option-list tbody tr').length + 1;
			$('table.plan-option-list > tbody').append(
				'<tr><td><input type="number" name="option[' + count + '][categories]" value="1"></td><td><input type="number" name="option[' + count + '][sub_categories]" value="1"></td><td><input type="number" name="option[' + count + '][group]" value="1"></td><td><a href="#" class="remove-plan-option"><span>X</span></a></td></tr>'
			);
			return false;
		});

		$('form#plan-create').submit(function (e) {
			e.preventDefault();
			var form = $(this);

			$.ajax({
				type: "POST",
				url: form.attr('action'),
				data: form.serialize(),
				success: function (data) {
					$('.messages-list').css('color', '#049003');
					$('.messages-list').text(data.message);
					document.location.reload();
				},
				error: function (r) {
					var data = JSON.parse(r.responseText);
					$('.messages-list').css('color', '#ff001c');
					$('.messages-list').text(data.message);
					$('#fs').attr('disabled', false)
				}
			});

			return false;
		});

		$('a.remove-plan').on('click',function (e) {
			//e.preventDefault();
			if (confirm('You want to delete this plan?')) {
			}else{
				return false;
			}
		});

	</script>
@endpush
