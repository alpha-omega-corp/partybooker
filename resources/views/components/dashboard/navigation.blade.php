@php
    use App\Http\Middleware\LocaleMiddleware;

    $user = Auth::user();
    function isActive($segment): string {
        $active = collect(request()->segments())->last();
        return $active === $segment ? 'nav-active' : '';
    }
@endphp

<div class="partner-nav">
    <div class="d-flex flex-column">
        @if(Auth::user()->type == 'admin')
            <a class="{{isActive('statistics')}}"
               href="{{url(LocaleMiddleware::getLocale().'/cp/partner-cp/'.$user->id_partner)}}/statistics">{{__('partner.home_page')}}</a>

            <a class="{{isActive('profile')}}"
               href="{{url(LocaleMiddleware::getLocale().'/cp/partner-cp/'.$user->id_partner)}}/profile">{{__('partner.profile')}}</a>

            <a class="{{isActive('plans')}}"
               href="{{url(LocaleMiddleware::getLocale().'/cp/partner-cp/'.$user->id_partner)}}/plans">{{__('partner.my_plan')}}</a>
        @else

            <a class="{{isActive('statistics')}} cp-nav-item"
               data-tippy-content="{{__('partner.home_page')}}"
               href="{{url(LocaleMiddleware::getLocale().'/partner-cp/'.$user->id_partner)}}/statistics">
                @svg('heroicon-o-presentation-chart-bar')
            </a>

            <a class="{{isActive('profile')}} cp-nav-item"
               data-tippy-content="{{__('partner.profile')}}"
               href="{{url(LocaleMiddleware::getLocale().'/partner-cp/'.$user->id_partner)}}/profile">
                @svg('heroicon-o-user-circle')
            </a>

            <a class="{{isActive('plans')}} cp-nav-item"
               data-tippy-content="{{__('partner.my_plan')}}"
               href="{{url(LocaleMiddleware::getLocale().'/partner-cp/'.$user->id_partner)}}/plans">
                @svg('heroicon-o-swatch')
            </a>

            <a class="{{isActive('advert')}} cp-nav-item"
               data-tippy-content="{{__('partner.see-ad')}}"
               href="{{route('profile-advert', $user->id_partner)}}">
                @svg('heroicon-o-identification')
            </a>

            <a class="{{isActive('contacts')}} cp-nav-item"
               data-tippy-content="{{__('partner.contacts')}}"
               href="{{url(LocaleMiddleware::getLocale().'/partner-cp/'.$user->id_partner)}}/contacts">
                @svg('heroicon-o-envelope')
            </a>
        @endif
    </div>
</div>
