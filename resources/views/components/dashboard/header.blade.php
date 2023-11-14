@php($user = auth()->user())

<div class="dashboard-title">
    <div class="d-flex align-items-center justify-content-start">
        <x-dashboard.title/>
        <x-dashboard.navigation/>
    </div>

    {{$slot}}
</div>

<hr>
