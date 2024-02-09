@props([
    'button' => null,
    'hasIcon' => true,
    'hasButton' => true,
])

<a
    id="toggle-{{$id}}"
    class="tippy btn btn-{{$color}} {{!$hasButton ? 'd-none' : ''}}"
    data-tippy-content="{{$type->name}}"
    data-bs-toggle="modal"
    data-bs-target="{{'#'. $id}}"
>
    @if($hasIcon)
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
    {{$button}}
</a>


<div
    id="{{$id}}"
    class="modal fade"
    tabindex="-1"
    data-bs-backdrop="static"
    data-bs-keyboard="false"
    aria-hidden="true"
    aria-labelledby="{{$id . 'ModalLabel'}}">

    <form
        method="{{$type === ModalType::READ ? 'GET' : 'POST'}}"
        action="{{$route}}"
        {{$multipart ? 'enctype=multipart/form-data' : ''}}>

        <div class="modal-dialog {{$size}} modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title fs-5 fw-bold text-uppercase" id="{{$id . 'ModalLabel'}}">
                        {{ucfirst($type->name)}} {{$name}}
                    </h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    @method($type->value)
                    @csrf

                    {{$slot}}
                </div>
                <div class="modal-footer gap-2">
                    <button type="button" class="btn btn-secondary" id="{{$id . '-close'}}" data-bs-dismiss="modal">
                        {{strtoupper('Close')}}
                    </button>
                    <button type="submit" class="btn text-white btn-{{$color}}" id="{{$id . '-save'}}">
                        {{ucfirst($type->value)}}
                    </button>
                </div>
            </div>
        </div>
    </form>
</div>
