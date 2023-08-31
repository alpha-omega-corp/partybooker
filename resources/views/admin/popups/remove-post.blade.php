<div id="remove-post" class="popup">
	<div class="popup_form">
		<form method="POST" action="{{url(App\Http\Middleware\LocaleMiddleware::getLocale().'/cp/blog/remove/'.$post[0]->post_id)}}">
			{{ csrf_field() }}
			<div class="close">X</div>
			<h4>Are you sure, you want to remove this post?</h4>
			
			<button type="submit">{{ __('partybooker-cp.submit')}}</button> 
		</form>
	</div>
</div>