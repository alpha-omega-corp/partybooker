@props([
    'user'
])
@if (Auth::user()->type == 'admin')
    <h1 class="text-uppercase text-start p-3 fw-bold display-6">
        {{$user->partnerInfo->fr_company_name}}
    </h1>
@else
    <h1 class="text-uppercase text-start p-3 fw-bold display-4">
        {{__('partner.dashboard')}}
    </h1>
@endif
