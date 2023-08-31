<div class="head-nav">
    <a href="{{url(App\Http\Middleware\LocaleMiddleware::getLocale().'/')}}" class="mr-auto"><img src="/images/logoPB.png" alt="logo"></a>
	@if (Auth::user())
		<span>{{ __('partybooker-cp.hello')}}, <?php echo Auth::user()->name; ?>!</span>
	@endif
	<a href="<?= route('setlocale', ['lang' => 'fr']) ?>" class="lg" lan="fr">Fr</a>
    <a href="<?= route('setlocale', ['lang' => 'en']) ?>" class="lg" lan="en">En</a>
    <div class="open-btn" onclick="openNav()"><i class="icon-menu"></i></div>
</div>
