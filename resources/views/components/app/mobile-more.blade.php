@props([
    'modal',
    'items',
])

<div class="mobile-more-button">
    <x-modal.open
        :name="$modal"
        :type="ModalType::READ"
        :fit="true"
    >
    <span class="d-flex justify-content-center align-items-center">
        <span>{{strtoupper(__('app.mobile-more'))}}</span>
    </span>
    </x-modal.open>
</div>

<x-modal.index
    :type="ModalType::READ"
    :size="ModalSize::MD"
    :name="$modal"
    :hidden="true"
    :action="false"
    :hasTitle="false"
>
    <div class="mobile-more-content">
        @switch($modal)
            @case(ModalName::MORE_TOPS)
                @include('app.home.partials.carousel-mobile.top', ['topValue' => $items->reverse()])
                @break
            @case(ModalName::MORE_INFORMATION)
                @include('app.home.partials.carousel-mobile.information', ['informationValue' => $items->reverse()])
                @break
            @case(ModalName::MORE_COMMENTS)
                @include('app.home.partials.carousel-mobile.comment', [
                    'commentsValue' => $items->reverse(),
                ])
                @break

        @endswitch
    </div>

</x-modal.index>



