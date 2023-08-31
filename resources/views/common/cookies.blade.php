@if(!isset($_COOKIE['cookies-policy']))
	<div id="cookies-block">
		<div style="height: 70px;"></div>
		<nav id="cookies-window" class="navbar">
			<div class="container center">
				<p class="text-center">
					{{__('main.cookies_text')}}&nbsp;&nbsp;&nbsp;<button id="accept-cookies" class="btn btn-sm btn-success">{{__('main.cookies_accept')}}</button>&nbsp;&nbsp;&nbsp;<a href="{{url(\App\Http\Middleware\LocaleMiddleware::getLocale() . '/user-terms')}}" class="btn btn-sm btn-info">{{__('main.cookies_info')}}</a>
				</p>
			</div>
		</nav>
	</div>

	@push('footer')
		<script>
			$('button#accept-cookies').click(function (e) {
				e.preventDefault();
				createCookie("cookies-policy", 1, 350);
				$('div#cookies-block').remove();
			});
		</script>
	@endpush
@endif
