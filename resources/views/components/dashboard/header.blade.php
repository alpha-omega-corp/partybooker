@props([
    'user',
])
<div class="dashboard-title">

    <div class="d-flex align-items-center justify-content-start">

        <x-dashboard.title :user="$user"/>
        <x-dashboard.navigation :user="$user"/>
    </div>
    @if($user->subscription('PartyBooker'))
        @if($user->onTrial())
            <x-dashboard.card-info>
                {{__('partner.trial_ending', [
                    'date' => $user->subscription('PartyBooker')->trial_ends_at->format('d/m/Y'),
                ])}}
            </x-dashboard.card-info>
        @endif

        @if($user->subscription('PartyBooker')->onGracePeriod())
            <x-dashboard.card-info>
                {{__('form.subscription_access_ending', [
                    'date' => $user->subscription('PartyBooker')->ends_at->format('d/m/Y'),
                ])}}
            </x-dashboard.card-info>
        @endif
    @endif

    {{$slot}}
</div>

