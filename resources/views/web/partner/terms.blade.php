<div class="tab" tab="terms" style="display: block">
	@if (app()->getLocale() == 'en')
		{!!$settings[0]->service_terms_en!!}
	@else 
		{!!$settings[0]->service_terms_fr!!}
	@endif			
</div>
