@props([
    'user'
])
@if (Auth::user()->type == 'admin')

    <div class="d-flex align-items-center">
        <h1 class="text-uppercase text-start p-3 fw-bold display-6">
            {{$user->partnerInfo->fr_company_name}}
        </h1>
        <div>
            <span class="badge text-bg-{{$user->partnerInfo->plan}} text-white">
                {{ucfirst($user->partnerInfo->plan)}}
            </span>
        </div>
    </div>

@else
    <h1 class="text-uppercase text-start p-3 fw-bold display-4">
        {{__('partner.dashboard')}}
    </h1>
@endif
