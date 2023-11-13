@php use App\Http\Middleware\LocaleMiddleware; @endphp
@props([
    'user'
])

@if($user->onTrial())
    <div class="d-flex flex-shrink-1 trial-card">
        <img src="{{Vite::image('free-trial.svg')}}" alt="trial"/>

        <x-dashboard.card-info>
            {{__('partner.trial_ends', ['date' => $user->trial_ends_at->format('d M Y')])}}
        </x-dashboard.card-info>
    </div>
    <hr>
    <a class="choose-plan"
       data-tippy-content="{{__('partner.my_plan')}}"
       href="{{url(LocaleMiddleware::getLocale().'/partner-cp/'.$user->id_partner)}}/plans">
        @svg('heroicon-o-swatch')
        {{__('plan.choose')}}
    </a>
@endif
