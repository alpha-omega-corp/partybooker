<div class="dropdown">
	<button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown"
	        aria-haspopup="true" aria-expanded="false">
		@if(\Request::get('budget'))
			{{in_array(\Request::get('budget'), array_keys(\App\Helpers\BudgetsHelper::$_budgets)) ? \App\Helpers\BudgetsHelper::$_budgets[\Request::get('budget')] : __('partner.budget')}}
		@else
			{{__('partner.budget')}}
		@endif
	</button>
	<div class="dropdown-menu budget" data-url="{{$partners->url($partners->currentPage())}}" aria-labelledby="dropdownMenuButton">
		<a class="dropdown-item" data-value="0" href="{{ $partners->url(1). '&budget=0' }}">&nbsp;</a>
		@foreach(\App\Helpers\BudgetsHelper::$_budgets as $k => $v)
			<a class="dropdown-item" data-value="{{$k}}" href="{{ $partners->url(1) . '&budget=' . $k}}">{{$v}}</a>
		@endforeach
	</div>
</div>
