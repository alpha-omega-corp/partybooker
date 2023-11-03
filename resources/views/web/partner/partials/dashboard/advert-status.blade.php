@php use App\Models\Advert; @endphp

<div class="d-flex flex-column m-0">
    @if ($user->partnerInfo->public == 0)
        <a href="#" class="status-button text-primary shadow-lg" role="button"
           data-id="{{ $user->partnerInfo->id_partner }}">
            {{ __('partner.publish')}}
        </a>
    @else
        <a class="status-button text-danger shadow-lg" role="button"
           data-id="{{ $user->partnerInfo->id_partner }}">
            {{ __('partner.draft') }}
        </a>
    @endif
</div>
