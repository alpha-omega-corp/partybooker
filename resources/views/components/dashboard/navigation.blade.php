@php
    use App\Http\Middleware\LocaleMiddleware;

    $user = Auth::user();
    function isActive($segment): string {
        $active = collect(request()->segments())->last();
        return $active === $segment ? 'nav-active' : '';
    }
@endphp

<div class="partner-nav">
    <div class="d-flex">
        @if(Auth::user()->type == 'admin')
            <a class="{{isActive('statistics')}}"
               href="{{url(LocaleMiddleware::getLocale().'/cp/partner-cp/'.$user->id_partner)}}/statistics">{{__('partner.home_page')}}</a>

            <a class="{{isActive('profile')}}"
               href="{{url(LocaleMiddleware::getLocale().'/cp/partner-cp/'.$user->id_partner)}}/profile">{{__('partner.profile')}}</a>

            <a class="{{isActive('plans')}}"
               href="{{url(LocaleMiddleware::getLocale().'/cp/partner-cp/'.$user->id_partner)}}/plans">{{__('partner.my_plan')}}</a>
        @else
            <a class="{{isActive('advert')}} cp-nav-item"
               data-tippy-content="{{__('partner.profile')}}"
               href="{{route('profile-advert', $user->id_partner)}}">
                @svg('heroicon-o-identification')
            </a>
            <a class="{{isActive('plans')}} cp-nav-item"
               data-tippy-content="{{__('partner.my_plan')}}"
               id="plan-navigation-button"
               href="{{url(LocaleMiddleware::getLocale().'/partner-cp/'.$user->id_partner)}}/plans">
                @svg('heroicon-o-swatch')
            </a>
        @endif
    </div>
</div>
