@php use App\Http\Middleware\LocaleMiddleware; @endphp
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

    @if($service->canPublish($partner->id_partner) || \Illuminate\Support\Facades\Auth::user()->type === 'admin')
        <div class="d-flex flex-column m-0">
            @if ($partner->public == 0)
                <a href="#" class="status-button text-primary shadow-lg" role="button"
                   data-id="{{ $partner->id_partner }}">
                    {{ __('partner.publish')}}
                </a>
            @else
                <a class="status-button text-danger shadow-lg" role="button"
                   data-id="{{ $partner->id_partner }}">
                    {{ __('partner.draft') }}
                </a>
            @endif
        </div>

    @endif

    <hr>
    <x-dashboard.company-info :tooltip="__('partner.link')" icon="heroicon-o-globe-alt">
        <a target="_blank" class="text-gray"
           href="{{url(LocaleMiddleware::getLocale() . '/' . __('urls.listing') . '/' . $partner->slug)}}">
            {{'partybooker.ch/' . __('urls.listing') . '/' . $partner->slug}}
        </a>
    </x-dashboard.company-info>
</x-dashboard.card>
