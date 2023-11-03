@php($user = auth()->user())

<div class="dashboard-title">
    <div class="d-flex align-items-center justify-content-start">
        <x-dashboard.title/>
        @if($user->onTrial() || $user->subscribed('PartyBooker'))
            <x-dashboard.navigation/>
        @endif
    </div>

    {{$slot}}
</div>

<hr>
