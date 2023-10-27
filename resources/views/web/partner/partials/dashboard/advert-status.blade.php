@php use App\Models\Advert; @endphp

<div class="status">
    <div class="public d-flex flex-column m-0">


        @if ($user->partnerInfo->public == 0)
            <span class="text-danger">{{ __('partner.not_published') }}</span>
            @if (in_array(strtolower($user->partnerInfo->currentPlan->name), ['basic', 'commission']))

                <a href="#" class="status-button btn text-primary" role="button"
                   data-id="{{ $user->partnerInfo->id_partner }}">
                    {{ __('partner.publish')}}
                </a>

            @elseif ($user->partnerInfo->services()->where('status', Advert::STATUS_DRAFT)->first())

                <a href="#" class="button disabled">{{ __('partner.publish') }}</a>
            @elseif (is_null($user->partnerInfo->main_img))
                <button class="btn btn-accent" x-data=""
                        @click="document.getElementById('addMainImage').click()">
                    {{ __('partner.edit_main_image') }}
                </button>
                <hr>
                <button class="btn btn-danger" style="cursor: not-allowed !important;"
                        disabled>{{ __('partner.publish') }}</button>
            @else
                <a class="status-button text-primary" role="button"
                   data-id="{{ $user->partnerInfo->id_partner }}">
                    {{ __('partner.publish')}}
                </a>
            @endif

        @else
            <span class="text-primary">{{ __('partner.published')}}</span>
            <a class="status-button text-danger" role="button"
               data-id="{{ $user->partnerInfo->id_partner }}">{{ __('partner.draft') }}</a>
        @endif

    </div>
</div>
