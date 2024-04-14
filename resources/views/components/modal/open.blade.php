<div
    x-data="modal('{{$id}}')"
    @class(['modal-open-absolute' => $absolute])
>

    <button
        type="button"
        @class([
            'btn',
            'tippy' => $type || $tooltip,
            'btn-'.($customColor ? $customColor->value : $color) => true,
            'text-'.$color => !$background,
            'w-100' => $fit,
        ])
        {{$attributes->merge(['class' => 'd-flex justify-content-center align-items-center'])}}
        {{$type ? 'data-tippy-content='. $type->name : ''}}
        data-tippy-content="{{$tooltip ?: ($type ? $type->name : '')}}"
        @click="open"
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
