@props([
    'id',
    'title' => null,
    'button',
    'hasButton' => true,
    'color' => null,
    'action',
    'icon' => null,
    'method' => 'POST',
    'hasFiles' => false,
    'size' => null,
    'saveLabel' => 'Save',
])


<a type="button" id="{{$id . '-button'}}" class="{{!$hasButton ? 'd-none' : ''}}"
   data-bs-toggle="modal"
   data-bs-target="{{'#'. $id}}"
   data-tippy-content="{{$button}}">
    <div class="dashboard-modal-button rounded-circle">
        @if($icon)
            @svg($icon)
        @else
            @svg('heroicon-o-cog-6-tooth')
        @endif
    </div>
</a>


<div class="modal fade" id="{{$id}}" tabindex="-1" aria-labelledby="{{$id . 'ModalLabel'}}" aria-hidden="true"
     data-bs-backdrop="static" data-bs-keyboard="false">
    <form
        method="{{$method}}"
        action="{{$action}}"
        {{$hasFiles ? 'enctype=multipart/form-data' : ''}}
    >
        <div class="modal-dialog {{$size ? $size : 'modal-xl'}} modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">

                    <h1 class="modal-title fs-5 fw-bold text-uppercase" id="{{$id . 'ModalLabel'}}">
                        @if(isset($image))
                            <div class="d-flex align-items-center justify-content-center">
                                {{$image}}
                            </div>
                        @else
                            {{$title}}
                        @endif
                    </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                </div>
                <div class="modal-body">
                    @csrf
                    {{$slot}}
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" id="{{$id . '-close'}}" data-bs-dismiss="modal">
                        {{__('form.close')}}
                    </button>
                    <button type="submit" class="btn btn-primary" id="{{$id . '-save'}}">
                        {{$saveLabel}}
                    </button>
                </div>
            </div>
        </div>
    </form>

</div>
