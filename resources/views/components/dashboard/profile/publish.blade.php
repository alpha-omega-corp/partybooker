@props([
    'partner',
    'service'
])

<x-dashboard.card :title="$partner->fr_company_name">
    <x-slot:badge>
        @if ($partner->public == 0)
            <span
                class="status-badge badge text-bg-danger text-white">{{ __('partner.not_published') }}</span>
        @else
            <span
                class="status-badge badge text-bg-primary text-white">{{ __('partner.published') }}</span>
        @endif
    </x-slot:badge>

    @if($service->canPublish())
        @include('web.partner.partials.dashboard.advert-status')

        <hr>
        <x-dashboard.company-info :tooltip="__('partner.link')" icon="heroicon-o-globe-alt">
            <a target="_blank" class="text-gray"
               href="{{url(LocaleMiddleware::getLocale() . '/' . __('urls.listing') . '/' . $user->partnerInfo->slug)}}">
                {{'partybooker.ch/' . __('urls.listing') . '/' . $user->partnerInfo->slug}}
            </a>
        </x-dashboard.company-info>

    @endif
</x-dashboard.card>
