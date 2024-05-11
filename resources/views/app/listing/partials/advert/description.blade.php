@php use App\Services\ListingService; @endphp
<x-card
    :title="__('advert.description')"
    :actionable="(new ListingService())->grant($advert)"
    class="service-description"
    :radius="true"
    :can-open="false"
>
    <x-slot:actions>
        @include('app.partner.partials.adverts.description.edit')
    </x-slot:actions>

    <x-slot:body>
        <div x-data="truncate('{{json_encode(str_replace("'", '', $advert->locale->description))}}')">
            <div x-html="truncated"></div>
            <button type="button" class="btn" x-show="canTruncate" @click="expand()">
                <span x-show="expanded">{{__('advert.close')}}</span>
                <span x-show="!expanded">{{ucfirst(__('app.mobile-more'))}}</span>
            </button>
        </div>

    </x-slot:body>
</x-card>

