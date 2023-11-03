@php use App\Models\Advert; @endphp

<div class="d-flex flex-column m-0">
    @if ($user->partnerInfo->public == 0)
        @if ($user->subscribed('PartyBooker'))

            <a href="#" class="status-button text-primary shadow-lg" role="button"
               data-id="{{ $user->partnerInfo->id_partner }}">
                {{ __('partner.publish')}}
            </a>
        @elseif ($user->partnerInfo->services()->where('status', Advert::STATUS_DRAFT)->first())
            <x-dashboard.card-info>
                Fill service details


            </x-dashboard.card-info>
        @elseif (is_null($user->partnerInfo->main_img))
            <button class="btn btn-accent" x-data=""
                    @click="document.getElementById('addMainImage').click()">
                {{ __('partner.edit_main_image') }}
            </button>

            <button class="btn btn-danger" style="cursor: not-allowed !important;"
                    disabled>{{ __('partner.publish') }}</button>
        @else
            <a class="status-button text-primary" role="button"
               data-id="{{ $user->partnerInfo->id_partner }}">
                {{ __('partner.publish')}}
            </a>
        @endif
    @else
        <a class="status-button text-danger" role="button"
           data-id="{{ $user->partnerInfo->id_partner }}">{{ __('partner.draft') }}</a>
    @endif
</div>
