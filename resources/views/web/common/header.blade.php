<header>
    <div id="myNav" class="overlay">
        <a href="javascript:void(0)" class="close-btn" onclick="closeNav()">&times;</a>
        <div class="overlay-content">
            <div class="links">
                <a page="home" href="{{url(App\Http\Middleware\LocaleMiddleware::getLocale().'/')}}">{{__('main.home_page')}}</a>
                <a page="listing" href="{{url(App\Http\Middleware\LocaleMiddleware::getLocale().'/listing')}}">{{__('main.listing_page')}}</a>
                <a page="partner" href="{{url(App\Http\Middleware\LocaleMiddleware::getLocale().'/partner')}}">{{__('main.become_partner_page')}}</a>
                <a page="aboutus" href="{{url(App\Http\Middleware\LocaleMiddleware::getLocale().'/aboutus')}}">{{__('main.aboutus_page')}}</a>
                <a page="faqs" href="{{url(App\Http\Middleware\LocaleMiddleware::getLocale().'/faq')}}">{{__('main.faqs_page')}}</a>
                <a page="blog" href="{{url(App\Http\Middleware\LocaleMiddleware::getLocale().'/blog')}}">{{__('main.blog_page')}}</a>
                <a page="contacts" href="{{url(App\Http\Middleware\LocaleMiddleware::getLocale().'/contacts')}}">{{__('main.contact_page')}}</a>
				@if (Route::has('login'))
                    @auth
						<?php $type = Auth::user()->type ?>
						@if ($type != '')
                        <a page="cp" href="{{url(App\Http\Middleware\LocaleMiddleware::getLocale().'/cp')}}">CP</a>
						@endif
						<a href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>                   						
                    @else
                        <a href="#" class="log-in">{{__('main.login')}}</a>
                    @endauth
				@endif	
            </div>

            <div class="social-links-menu">
				@if($settings[0]->facebook)
					<a href="{{$settings[0]->facebook}}" target="_blank"><i class="icon-facebook"></i></a>
				@endif
				@if($settings[0]->linkedin)
					<a href="{{$settings[0]->linkedin}}" target="_blank"><i class="icon-linkedin"></i></a>
				@endif
				@if($settings[0]->instagram)
					<a href="{{$settings[0]->instagram}}" target="_blank"><i class="icon-instagram "></i></a>
				@endif
				@if($settings[0]->googleplus)
					<a href="{{$settings[0]->googleplus}}" target="_blank"><i class="icon-googleplus "></i></a>
				@endif
				@if($settings[0]->twitter)
					<a href="{{$settings[0]->twitter}}" target="_blank"><i class="icon-twitter "></i></a>
				@endif
            </div>
        </div>
    </div>
</header>