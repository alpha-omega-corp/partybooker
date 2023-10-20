@props([
    'partnerId',
    'action',
])

<x-modal
    name="contactModalToggle"
    :action="$action"
    :title="__('service.contact_us')"
    :submit="__('service.send')">

    <p class="book-text shadow-lg">{{ __('service.contact_us_description') }}</p>
    <input type="hidden" name="partner_id" value="{{ $partnerId }}">

    <h4 class="text-uppercase fw-bold coord">{{__('service.coord')}}</h4>

    {{$form}}

    <div class="d-flex justify-content-center">
        {!! app('captcha')->display($attributes->jsonSerialize()) !!}
    </div>
</x-modal>
