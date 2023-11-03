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
@endif
