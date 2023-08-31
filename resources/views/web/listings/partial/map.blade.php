@push('footer')
	<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCDpzw9SH97G5L9Af-dR5TeixK8OEPqocY&callback=initMap" type="text/javascript"></script>

	<script>
		place = [
				@foreach ($partners->items() as $item)
				@if(!$item->lat || !$item->lon)
				@continue
				@endif
			{
				title: '{{($item->categories->first() && $item->categories->first()->primaryCategory) ? $item->categories->first()->primaryCategory->lang->name : "cat1"}}',
				position: {
					lat: parseFloat('{{$item->lat}}'),
					lng: parseFloat('{{$item->lon}}')
				},
				icon: '{{($item->categories->first() && $item->categories->first()->primaryCategory) ? $item->categories->first()->primaryCategory->code : "cat1"}}',
				content: '<div class="pin"><img src="{{ asset('storage/images/'.$item->main_img)}}" alt=""><h6>@if (app()->getLocale() == 'en') {{$item->en_company_name}} @else {{$item->fr_company_name}}    @endif</h6><p class="place">{{__('cantons.'.strtolower($item->location_code).'_loc')}}, {{$item->address}}</p></div>'
			},
			@endforeach
		]
	</script>
@endpush
