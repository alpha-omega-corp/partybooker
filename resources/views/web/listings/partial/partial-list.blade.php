<div class="service-listing">
	@foreach($partners->items() as $partner)
	<a href="{{url(App\Http\Middleware\LocaleMiddleware::getLocale().'/' . __('urls.listing') . '/'.$partner->slug)}}"
	   class="list-item @if(strtolower($partner->currentPlan->name) == 'exclusif') top @endif">
		<img src="{{ asset('storage/images/thumbnails/'.$partner->main_img)}}" alt="{{$partner->main_img}}" class="look">
		<div class="list-item-info">
			<h6>
				@if (app()->getLocale() == 'en')
				{{$partner->en_company_name}}
				@else
				{{$partner->fr_company_name}}
				@endif
			</h6>
			<p class="location-name">{{__('cantons.'.strtolower($partner->location_code).'_loc')}}, {{$partner->address}}</p>

			<div class="rating-stars text-center">
				<ul class="stars">
					@for($i = 1; $i <= 5; $i++)
						@if($i <= $partner->average_rate)
							@include('web.common.star-selected')
						@else
							@include('web.common.star')
						@endif
					@endfor
				</ul>
			</div>
			<p>
				@if (app()->getLocale() == 'en')
				{!!$partner->en_short_descr!!}
				@else
				{!!$partner->fr_short_descr!!}
				@endif
			</p>
		</div>
	</a>
	@endforeach
</div>

@if ($partners->lastPage() > 1)
<ul class="pagination" style="color: black">
	<li class="page-item navigation">
		<a href="{{ $partners->url(1) }}">Previous</a>
	</li>
	@for ($i = 1; $i <= $partners->lastPage(); $i++)
	<li class="page-item {{($partners->currentPage() == $i) ? ' active' : '' }}">
		<a href="{{ $partners->url($i) }}">{{ $i }}</a>
	</li>
	@endfor
	@if($partners->currentPage() != $partners->lastPage())
	<li class="page-item navigation {{  ($partners->currentPage() == $partners->lastPage()) ? ' disabled' : '' }}">
		<a href="{{ $partners->url($partners->currentPage()+1) }}" >Next</a>
	</li>
	@endif
</ul>
@endif
