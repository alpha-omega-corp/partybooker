<?php $locales = ['ag', 'ai', 'ar', 'bs', 'bl', 'be', 'fr', 'ge', 'gl', 'gr', 'ju', 'lu', 'ne', 'nw', 'ow', 'sh', 'sz', 'so', 'sg', 'tg', 'ti', 'ur', 'vs', 'vd', 'zg', 'zh']; ?>
@foreach ($locales as $loc)
    <option @if (strtolower(Request::get('place')) == $loc) selected @endif value="{{ __('cantons.' . $loc) }}">
        {{ __('cantons.' . $loc . '_loc') }}</option>
@endforeach
