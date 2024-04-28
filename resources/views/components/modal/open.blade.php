<div
    x-data="modal('{{$id}}')"
    @class([
    'w-100' => $fit,
    'h-100' => $fit,
    'modal-open-absolute' => $absolute,
])
>

    <button
        type="button"
        @class([
            'btn',
            'tippy' => $type || $tooltip,
            'text-white btn-'.($customColor ? $customColor->value : $color),
            'text-'.$color => !$background && !$customColor,
            'w-100' => $fit,
            'rounded-0' => !$radius,
            'text-start' => !$center
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
