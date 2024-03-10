<div
    class="
    {{$absolute ? 'modal-open-absolute' : ''}}
    {{$fit ? 'w-100' : ''}}
    "
    x-data="modal('{{$id}}')">

    <button
        type="button"
        class="
            {{$type || $tooltip ? 'tippy' : ''}} btn
            {{$background ? 'btn-'.$color : 'text-'.$color}}
            {{$fit ? 'w-100' : ''}}
            d-flex justify-content-center align-items-center
        "
        @click="open"
        {{$type ? 'data-tippy-content='. $type->name : ''}}
        data-tippy-content="{{$tooltip ? $tooltip : ($type ? $type->name : '')}}"
    >

        @if($icon)
            @svg($icon, 'modal-open-icon')
        @elseif($automatic)
            @switch($type)
                @case(ModalType::CREATE)
                    @svg('heroicon-o-plus-circle')
                    @break
                @case(ModalType::UPDATE)
                    @svg('heroicon-o-pencil')
                    @break
                @case(ModalType::DELETE)
                    @svg('heroicon-o-trash')
                    @break
                @default
                    @svg('heroicon-o-eye')
                    @break
            @endswitch
        @endif

        {{$text}}
    </button>
</div>
