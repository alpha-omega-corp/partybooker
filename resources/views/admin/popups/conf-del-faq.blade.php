<div id="del-faq" class="popup">
	<div class="popup_form">
		<form method="POST" action="{{url(App\Http\Middleware\LocaleMiddleware::getLocale().'/cp/faq/del-faq')}}">
			{{ csrf_field() }}
			<div class="close">X</div>
			<h4>{{ __('partybooker-cp.delete_faq')}}</h4>
			<h5>{{ __('partybooker-cp.really_delete_faq')}}</h5>			
			<input type="text" name="faq-id" hidden />
			<button type="submit">{{ __('partybooker-cp.submit')}}</button> 
		</form>
	</div>
</div>