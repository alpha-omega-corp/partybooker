@if(count($swisswins))
	<section class="swisswin">
		<h4>{{__('main.other_directories')}}</h4>
		<div class="container">
			<div class="owl-carousel header_carousel">
                            <?php $locale = (app()->getLocale()=='en')?'image_alt':'image_alt_fr';?>
				@foreach ($swisswins as $swisswin)
					<a class="item" href="{{$swisswin->url}}">
                                                <img src="{{ asset('storage/swisswine_directories/'.$swisswin->image)}}" alt="<?php echo $swisswin->$locale?>">
						<h6>
							{{$swisswin->title}}
						</h6>
					</a>
				@endforeach
			</div>
		</div>
	</section>
@endif
