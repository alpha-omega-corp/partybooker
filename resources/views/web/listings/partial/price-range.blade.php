<div class="multirange" data-url="{{ $partners->url($partners->currentPage()) }}">
	<input type="range" min="1" max="2500" value="{{ \Request::get('min_price') ?? 1 }}" class="lower">
	<input type="range" min="20" max="2500" value="{{ \Request::get('max_price') ?? 2500 }}" class="upper">
	<span class="line"></span>
</div>
<div class="range-val">
	<span class="result-l range-val">{{ \Request::get('min_price') ?? 1 }}</span>
	<span class="result-u range-val">{{ \Request::get('max_price') ?? 2500 }}</span>
</div>
