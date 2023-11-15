@php
    use App\Http\Middleware\LocaleMiddleware;
    $user = auth()->user();
@endphp
<div class="partner-nav">
    <div class="d-flex">
        @if(Auth::user()->type == 'admin')
            <a
                href="{{url(LocaleMiddleware::getLocale().'/cp/partner-cp/'.$user->id_partner)}}/statistics">{{__('partner.home_page')}}</a>

            <a
                href="{{url(LocaleMiddleware::getLocale().'/cp/partner-cp/'.$user->id_partner)}}/profile">{{__('partner.profile')}}</a>

            <a
                href="{{url(LocaleMiddleware::getLocale().'/cp/partner-cp/'.$user->id_partner)}}/plans">{{__('partner.my_plan')}}</a>
        @else
            <a class="cp-nav-item"
               data-tippy-content="{{__('partner.profile')}}"
               href="{{route('profile-advert', $user->id_partner)}}">
                @svg('heroicon-o-identification')
            </a>
            <a class="cp-nav-item"
               data-tippy-content="{{__('partner.my_plan')}}"
               id="plan-navigation-button"
               href="{{url(LocaleMiddleware::getLocale().'/partner-cp/'.$user->id_partner)}}/plans">
                @svg('heroicon-o-swatch')
            </a>
        @endif
    </div>
</div>
