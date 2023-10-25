@php use App\Models\Advert; @endphp

<div class="status">
    <div class="public d-flex flex-column m-0">
        @if ($user->partnerInfo->payment_status != 1)
            <a href="#" class="button disabled">{{ __('partner.publish') }}</a>
        @else

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
                    <a href="#" class="button disabled">{{ __('partner.publish') }}</a>
                @else
                    <a href="#" class="btn text-primary" role="button"
                       data-id="{{ $user->partnerInfo->id_partner }}">
                        {{ __('partner.publish')}}
                    </a>
                @endif

            @else
                <span class="text-primary">{{ __('partner.published')}}</span>
                <a href="#" class="status-button btn text-danger" role="button"
                   data-id="{{ $user->partnerInfo->id_partner }}">{{ __('partner.draft') }}</a>
            @endif
        @endif
    </div>
</div>
