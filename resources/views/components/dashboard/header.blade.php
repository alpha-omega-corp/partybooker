@props([
    'user',
    'plans'
])
<div class="dashboard-title">
    <div class="dashboard-title-box">
        <div class="d-flex align-items-center justify-content-between ">
            <x-dashboard.title :user="$user" :plans="$plans"/>
            @if(\Illuminate\Support\Facades\Auth::user()->type !== 'admin')
                <x-dashboard.navigation :user="$user"/>
            @endif
        </div>
        <div>
            {{$slot}}
        </div>
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

</div>

