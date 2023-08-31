<div id="new-plan" class="popup">
	<div class="popup_form">
		<form method="POST" id="plan-create"
		      action="{{url(App\Http\Middleware\LocaleMiddleware::getLocale().'/cp/settings/add-new-plan')}}">
			{{ csrf_field() }}
			<div class="close">X</div>
			<h4>{{ __('partybooker-cp.create_plan')}}</h4>
			<input type="text" name="id" hidden>

			<label>{{ __('partybooker-cp.t_name')}}</label>
			<input type="text" name="name" placeholder="Enter plan name" required>

			<label>{{ __('partybooker-cp.pos_listing')}}</label>
			<select id="select-position" name="position" required>
				<option value="1">{{ __('partybooker-cp.first')}}</option>
				<option value="2">{{ __('partybooker-cp.second')}}</option>
				<option value="3">{{ __('partybooker-cp.third')}}</option>
				<option value="">{{ __('partybooker-cp.custom')}}</option>
			</select>
			<input id="position-input" type="number" name="position" placeholder="Enter plan position" hidden disabled
			       required>

			<label>{{ __('partybooker-cp.listings_op')}}</label>
			<table class="table table-primary plan-option-list" style="width: 100%">
				<thead>
				<tr>
					<td>{{'categories'}}</td>
					<td>{{'sub_categories'}}</td>
					<td>{{'group'}}</td>
					<td></td>
				</tr>
				</thead>
				<tbody>
				<tr>
					<td><input type="number" name="option[1][categories]" value="1"></td>
					<td><input type="number" name="option[1][sub_categories]" value="1"></td>
					<td><input type="number" name="option[1][group]" value="1"></td>
					<td></td>
				</tr>
				</tbody>
				<tfoot>
				<tr>
					<td class="add-plan-option" style="text-align: center" colspan="4"><a href="#">Add option</a></td>
				</tr>
				</tfoot>
			</table>
			<br>

			<label>{{ __('partybooker-cp.number_photos')}}</label>
			<input type="number" name="photos" min="0" required>

			<div class="radio-btn">
				<label>{{ __('partybooker-cp.t_video')}}</label>
				<span class="radio-item">
					<input type="radio" name="video" value="1" required/><span>{{ __('partybooker-cp.radio_y')}}</span>
				</span>
				<span class="radio-item">
					<input type="radio" name="video" value="0" required/><span>{{ __('partybooker-cp.radio_n')}}</span>
				</span>
			</div>

			<div class="radio-btn">
				<label>{{ __('partybooker-cp.direct_request')}}</label>
				<span class="radio-item">
					<input type="radio" name="d_request" value="1"
					       required/><span>{{ __('partybooker-cp.radio_y')}}</span>
				</span>
				<span class="radio-item">
					<input type="radio" name="d_request" value="0"
					       required/><span>{{ __('partybooker-cp.radio_n')}}</span>
				</span>
			</div>

			<label>{{ __('partybooker-cp.t_price')}}</label>
			<input type="number" name="price" min="0" required>

			<div class="messages-list" style="color: red">

			</div>

			<button type="submit">{{ __('partybooker-cp.submit')}}</button>
		</form>
	</div>
</div>
