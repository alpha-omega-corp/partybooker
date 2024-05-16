@props(['content'])

<div x-data="truncate('{{json_encode(str_replace("'", '', $content))}}')">
    <div class="p-4" x-html="truncated"></div>
    <button type="button" class="btn p-4" x-show="canTruncate" @click="expand()">
        <span x-show="expanded">{{__('advert.close')}}</span>
        <span x-show="!expanded">{{ucfirst(__('app.mobile-more'))}}</span>
    </button>
</div>
