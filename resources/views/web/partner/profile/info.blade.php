@if (!is_null($info[0]->plan))
	@if (in_array($info[0]->plan, ['standart', 'commission']))
		@if (is_null($info[0]->category_1))
			<ul class="categorySubcat attention">
				<li block="categorySubcat"><h4>{{__('partner.category')}}</h4></li>
				<li class="li">{{__('partner.choose_category')}}</li>
				<li class="li"><a href="#" class="button">{{__('partner.choose')}}</a></li>
			</ul>
		@else
			<ul class="categorySubcat">
				<li block="categorySubcat"><h4>Category</h4></li>
				<li class="li"><span>{{__('partner.category')}}:</span> {{__('categories.'.$info[0]->category_1)}}</li>
				<li class="li"><span>{{__('partner.subcategory')}}:</span> {{__('categories.'.$info[0]->subcat_1)}}</li>
				<li class="li"><a href="#" class="button">{{__('partner.edit')}}</a></li>
			</ul>
		@endif
	@endif
	
	@if ($info[0]->plan == 'premium')
		@if(!is_null($info[0]->plan_option))
			@if ($info[0]->plan_option == 0)
				@if (is_null($info[0]->category_1))
					<ul class="categorySubcat attention">
						<li block="categorySubcat"><h4>{{__('partner.category')}}</h4></li>
						<li class="li">{{__('partner.choose_category')}}</li>
						<li class="li"><a href="#" class="button">{{__('partner.choose')}}</a></li>
					</ul>
				@else
					<ul class="categorySubcat">
						<li block="categorySubcat"><h4>{{__('partner.category')}}</h4></li>
						<li class="li"><span>{{__('partner.category')}}:</span> {{__('categories.'.$info[0]->category_1)}}</li>
						<li class="li"><span>{{__('partner.subcategory')}}:</span> {{__('categories.'.$info[0]->subcat_1)}}</li>
						<li class="li"><span>{{__('partner.subcategory')}}:</span> {{__('categories.'.$info[0]->subcat_2)}}</li>
						<li class="li"><a href="#" class="button">{{__('partner.edit')}}</a></li>
					</ul>	
				@endif
			@endif
			@if ($info[0]->plan_option == 1)
				@if (is_null($info[0]->category_1) || is_null($info[0]->category_2))
					<ul class="categorySubcat attention">
						<li block="categorySubcat"><h4>{{__('partner.category')}}</h4></li>
						<li class="li">{{__('partner.choose_category')}}</li>
						<li class="li"><a href="#" class="button">{{__('partner.choose')}}</a></li>
					</ul>
				@else
					<ul class="categorySubcat">
						<li block="categorySubcat"><h4>{{__('partner.category')}}</h4></li>
						<li class="li"><span>#1</span></li>
						<li class="li"><span>{{__('partner.category')}}:</span> {{__('categories.'.$info[0]->category_1)}}</li>
						<li class="li"><span>{{__('partner.subcategory')}}:</span> {{__('categories.'.$info[0]->subcat_1)}}</li>
						<li class="li"><span>#2</span></li>
						<li class="li"><span>{{__('partner.category')}}:</span> {{__('categories.'.$info[0]->category_2)}}</li>
						<li class="li"><span>{{__('partner.subcategory')}}:</span> {{__('categories.'.$info[0]->subcat_2)}}</li>
						<li class="li"><a href="#" class="button">{{__('partner.edit')}}</a></li>
					</ul>	
				@endif
			@endif
		@endif
	@endif
	
	@if ($info[0]->plan == 'exclusif')
		@if(!is_null($info[0]->plan_option))
			@if ($info[0]->plan_option == 0)
				@if (is_null($info[0]->category_1))
					<ul class="categorySubcat attention">
						<li block="categorySubcat"><h4>{{__('partner.category')}}</h4></li>
						<li class="li">{{__('partner.choose_category')}}</li>
						<li class="li"><a href="#" class="button">{{__('partner.choose')}}</a></li>
					</ul>
				@else 
					<ul class="categorySubcat">
						<li block="categorySubcat"><h4>{{__('partner.category')}}</h4></li>
						<li class="li"><span>{{__('partner.category')}}:</span> {{__('categories.'.$info[0]->category_1)}}</li>
						<li class="li"><span>{{__('partner.subcategory')}}:</span> {{__('categories.'.$info[0]->subcat_1)}}</li>
						<li class="li"><span>{{__('partner.subcategory')}}:</span> {{__('categories.'.$info[0]->subcat_2)}}</li>
						<li class="li"><span>{{__('partner.subcategory')}}:</span> {{__('categories.'.$info[0]->subcat_3)}}</li>
						<li class="li"><a href="#" class="button">{{__('partner.edit')}}</a></li>
					</ul>	
				@endif
			@endif
			@if ($info[0]->plan_option == 1)
				@if (is_null($info[0]->category_1) || is_null($info[0]->category_2))
					<ul class="categorySubcat attention">
						<li block="categorySubcat"><h4>{{__('partner.category')}}</h4></li>
						<li class="li">{{__('partner.choose_category')}}</li>
						<li class="li"><a href="#" class="button">{{__('partner.choose')}}</a></li>
					</ul>
				@else 
					<ul class="categorySubcat">
						<li block="categorySubcat"><h4>Category</h4></li>
						<li class="li"><span>#1</span></li>
						<li class="li"><span>{{__('partner.category')}}:</span> {{__('categories.'.$info[0]->category_1)}}</li>
						<li class="li"><span>{{__('partner.subcategory')}}:</span> {{__('categories.'.$info[0]->subcat_1)}}</li>
						<li class="li"><span>{{__('partner.subcategory')}}:</span> {{__('categories.'.$info[0]->subcat_2)}}</li>
						<li class="li"><span>#2</span></li>
						<li class="li"><span>{{__('partner.category')}}:</span> {{__('categories.'.$info[0]->category_2)}}</li>
						<li class="li"><span>{{__('partner.subcategory')}}:</span> {{__('categories.'.$info[0]->subcat_3)}}</li>
						<li class="li"><a href="#" class="button">{{__('partner.edit')}}</a></li>
					</ul>	
				@endif
			@endif
			@if ($info[0]->plan_option == 2)
				@if (is_null($info[0]->category_1) || is_null($info[0]->category_2) || is_null($info[0]->category_3))
					<ul class="categorySubcat attention">
						<li block="categorySubcat"><h4>{{__('partner.category')}}</h4></li>
						<li class="li">{{__('partner.choose_category')}}</li>
						<li class="li"><a href="#" class="button">{{__('partner.choose')}}</a></li>
					</ul>
				@else 
					<ul class="categorySubcat">
						<li block="categorySubcat"><h4>{{__('partner.category')}}</h4></li>
						<li class="li"><span>#1</span></li>
						<li class="li"><span>{{__('partner.category')}}:</span> {{__('categories.'.$info[0]->category_1)}}</li>
						<li class="li"><span>{{__('partner.subcategory')}}:</span> {{__('categories.'.$info[0]->subcat_1)}}</li>
						<li class="li"><span>#2</span></li>
						<li class="li"><span>{{__('partner.category')}}:</span> {{__('categories.'.$info[0]->category_2)}}</li>
						<li class="li"><span>{{__('partner.subcategory')}}:</span> {{__('categories.'.$info[0]->subcat_2)}}</li>
						<li class="li"><span>#3</span></li>
						<li class="li"><span>{{__('partner.category')}}:</span> {{__('categories.'.$info[0]->category_3)}}</li>
						<li class="li"><span>{{__('partner.subcategory')}}:</span> {{__('categories.'.$info[0]->subcat_3)}}</li>
						<li class="li"><a href="#" class="button">{{__('partner.edit')}}</a></li>
					</ul>	
				@endif
			@endif
		@endif
	@endif
@endif
