@props(['content'])

<div x-data="truncate('{{json_encode(str_replace("'", '', $content))}}')">
    <div class="p-4" x-html="truncated"></div>
    <button type="button" class="btn m-4" x-show="canTruncate" @click="expand()">
        <span x-show="isOpen">{{__('advert.close')}}</span>
        <span x-show="!isOpen">{{ucfirst(__('app.mobile-more'))}}</span>
    </button>
</div>
