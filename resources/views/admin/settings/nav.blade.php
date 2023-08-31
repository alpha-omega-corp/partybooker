<div class="setting-nav">
	<ul>
		<li><a href="{{url(App\Http\Middleware\LocaleMiddleware::getLocale().'/cp/setting/admin-profile')}}">{{ __('partybooker-cp.profile')}}</a></li>
		<li><a href="{{url(App\Http\Middleware\LocaleMiddleware::getLocale().'/cp/setting/plans')}}">{{ __('partybooker-cp.plans')}}</a></li>
		<li><a href="{{url(App\Http\Middleware\LocaleMiddleware::getLocale().'/cp/setting/contacts')}}">{{ __('partybooker-cp.contacts')}}</a></li>
		<li><a href="{{url(App\Http\Middleware\LocaleMiddleware::getLocale().'/cp/setting/user-terms')}}">{{ __('partybooker-cp.user-terms')}}</a></li>
		<li><a href="{{url(App\Http\Middleware\LocaleMiddleware::getLocale().'/cp/setting/partner-terms')}}">{{ __('partybooker-cp.provider-terms')}}</a></li>
	</ul>
</div>