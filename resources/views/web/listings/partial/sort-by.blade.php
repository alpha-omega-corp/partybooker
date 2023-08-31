<div class="dropdown-menu sort" data-url="{{$partners->url($partners->currentPage())}}" aria-labelledby="dropdownMenuButton">
	<a class="dropdown-item up" sort="name" href="{{ $partners->url($partners->currentPage()) }}">{{ __('partybooker-cp.sort_name')}} &uarr;</a>
	<a class="dropdown-item down" sort="name" href="{{ $partners->url($partners->currentPage()) }}">{{ __('partybooker-cp.sort_name')}} &darr;</a>
	<a class="dropdown-item down" sort="price" href="{{ $partners->url($partners->currentPage()) }}">{{__('listing.price')}} &darr;</a>
	<a class="dropdown-item up" sort="price" href="{{ $partners->url($partners->currentPage()) }}">{{__('listing.price')}} &uarr;</a>
</div>
