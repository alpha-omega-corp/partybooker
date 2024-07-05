@props(['content'])

<div x-data="truncate('{{json_encode(str_replace("'", '', $content))}}')">
    <div x-html="truncated" class="p-4"></div>
    <button type="button" class="btn mt-4" x-show="canTruncate" @click="expand()">
        <span x-show="isOpen">{{__('advert.close')}}</span>
        <span x-show="!isOpen">{{ucfirst(__('app.mobile-more'))}}</span>
    </button>
</div>
