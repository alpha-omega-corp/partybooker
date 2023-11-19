@php use App\Http\Middleware\LocaleMiddleware; @endphp
@props([
    'user'
])
<div class="partner-nav">
    <div class="d-flex">
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
    </div>
</div>
