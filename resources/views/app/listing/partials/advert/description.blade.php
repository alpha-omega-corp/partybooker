<x-card
    :title="__('advert.description')"
    :radius="true"
    :can-open="false"
    :center="$center"
>
    <x-slot:body>
        <div x-data="truncate('{{json_encode(str_replace("'", '', $content))}}')">
            <div x-html="truncated"></div>
            <button type="button" class="btn" x-show="canTruncate" @click="expand()">
                <span x-show="expanded">{{__('advert.close')}}</span>
                <span x-show="!expanded">{{ucfirst(__('app.mobile-more'))}}</span>
            </button>
        </div>

    </x-slot:body>
</x-card>

