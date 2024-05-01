@php use App\Helpers\ModalHelper; @endphp
@props([
    'hasIcon' => true,
    'background' => true,
    'transparent' => false,
    'tag' => null,
    'hasTitle' => true,
])

<a
    id="{{'modalBtn'.$id}}"
    class="{{ !$text ? 'tippy' : ''}} btn {{$background ? 'btn-'.$color : 'text-'.$color}} {{$hidden ? 'd-none' : ''}} {{$absolute ? 'modal-absolute' : ''}}"
    data-tippy-content="{{$tooltip ? $tooltip : $type->name}}"
    data-bs-toggle="modal"
    data-bs-target="{{'#' . $id}}"
>
    @if($text)
        <p class="m-0 text-uppercase">{{$text}}</p>
    @else
        @if($icon)
            @svg($icon)
        @elseif($hasIcon)
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
    @endif
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

        <div class="modal-dialog {{$size}} modal-dialog-centered {{$transparent ? 'modal-transparent' : ''}}">
            <div class="modal-content">
                <div @class([
                    'modal-header',
                    'modal-header-padding' => $hasTitle,
                ])>
                    <div class="d-flex flex-column gap-2">
                        @if(!$action)
                            @if($hasTitle)
                                <h6 class="modal-title fs-5 fw-bold text-uppercase" id="{{$id . 'ModalLabel'}}">
                                    {{$title ? $title : ucfirst($type->name) . ' ' . $name->name}}
                                </h6>
                            @endif
                        @else
                            <div class="modal-action">
                                <div class="d-flex gap-2">
                            <span
                                class="badge text-bg-blue text-white modal-name">{{$name->name}}</span>
                                    @svg('heroicon-o-arrow-right')
                                    <span
                                        class="badge text-bg-{{$tag ? 'home-green' : $color}} text-white text-uppercase modal-name">{{$tag ? $tag : ucfirst($type->name)}}</span>
                                </div>
                            </div>
                        @endif

                    </div>

                    <button
                        type="button"
                        data-bs-dismiss="modal"
                        aria-label="Close"
                        @class([
                            'btn',
                            'btn-close' => $hasTitle,
                            'btn-close-full btn-secondary' => !$hasTitle,
                        ])>
                        @if(!$hasTitle)
                            @svg($backIcon)
                        @endif
                    </button>
                </div>

                <div class="modal-body">
                    @method($type->value)
                    @csrf

                    @if(isset($body))
                        <div class="modal-body-padded">
                            {{$body}}
                        </div>
                    @endif

                    {{$slot}}

                    @if($validation)
                        <div class="modal-captcha">
                            <x-captcha/>
                        </div>
                    @endif
                </div>
                <div class="modal-footer gap-2">
                    <div class="modal-footer-actions">
                        @if(isset($actions))
                            {{$actions}}
                        @endif
                        <button type="button" class="btn btn-outline-secondary" id="{{$id . '-close'}}"
                                data-bs-dismiss="modal">
                            {{strtoupper('Close')}}
                        </button>

                        @if($type !== ModalType::READ)
                            <button type="submit" class="btn text-white btn-{{$color}}" id="{{$id . '-save'}}">
                                {{strtoupper('Submit')}}
                            </button>
                        @endif
                    </div>

                </div>
            </div>
        </div>
    </form>
</div>
