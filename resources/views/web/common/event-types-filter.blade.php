<h6>{{__('main.event-types')}}:</h6>
<ul class="filters-list">
	<form id="event-sub" action="{{$partners->url(1)}}">
		@foreach($eventTypes as $et)
			<li>
				<input class="mce-group" @if(\Request::has('event_types') && in_array($et['slug'], \Request::get('event_types'))) checked @endif type="checkbox"  name="event_types[]" value="{{$et['slug']}}" /> 
				<label class="ls-select" style="color: black; " for="mce-group">{{$et['name']}}</label>
			</li>
		@endforeach
		<li>
			<input id="selectAll" @if(\Request::has('event_types') && count(\Request::get('event_types')) == count($eventTypes)) checked @endif type="checkbox">&nbsp;&nbsp;<label style="color: black" class="ls-select" for='selectAll'>{{__('main.select_all')}}</label></li>
	</form>
</ul>
@push('footer')
	<script>
		$('.ls-select').click(function () {
			$(this).closest('input.mce-group').prop('checked', $(this).prop('checked'));
			$(this).closest('input').click();
		});

		$('.mce-group').click(function () {
			$('form#event-sub').submit();
		});

		$("#selectAll").click(function() {
			if($(this).prop('checked')){
				$("input[type=checkbox].mce-group").removeProp('checked');
			}
			$("input[type=checkbox].mce-group").prop('checked', $(this).prop('checked'));
			$('form#event-sub').submit();
		});
	</script>
@endpush
