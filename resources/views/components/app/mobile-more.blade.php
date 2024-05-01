@props([
    'modal',
    'items',
])

<div class="mobile-more-button">
    <x-modal.open
        :name="$modal"
        :type="ModalType::READ"
        :custom-color="AppColor::SECONDARY"
        :background="true"
        :fit="true"
    >
    <span class="d-flex justify-content-between align-items-center fs-6 p-1">
        <span style="font-family: 'Poppins', sans-serif;">{{strtoupper(__('app.mobile-more'))}}</span>
        @svg('heroicon-o-chevron-right', 'ms-2')
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



