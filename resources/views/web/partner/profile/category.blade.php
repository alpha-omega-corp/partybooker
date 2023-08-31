@if (count($currentCategories) == 0)
	<ul class="categorySubcat attention">
		<li block="categorySubcat"><h4>{{__('partner.category')}}</h4></li>
		<li class="li">{{__('partner.choose_category')}}</li>
		<li class="li"><a href="#" class="button">{{__('partner.choose')}}</a></li>
	</ul>
@else
	<ul class="categorySubcat">
		<li block="categorySubcat"><h4>{{__('partner.category')}}</h4></li>
		@foreach($currentCategories as $key => $category)
		<li class="li"><span>#{{$key+1}}</span></li>
		<li class="li"><span>{{__('partner.category')}}:</span> {{$category->lang->name}}</li>
			@foreach($category->subCategories as $sub)
				<li class="li"><span>{{__('partner.subcategory')}}:</span> {{$sub->lang->name}}</li>
			@endforeach
		@endforeach
		<li class="li"><a href="#" class="button">{{__('partner.edit')}}</a></li>
	</ul>
@endif
