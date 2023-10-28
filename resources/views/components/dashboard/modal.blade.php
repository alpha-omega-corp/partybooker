@props([
    'id',
    'title',
    'button',
    'action',
    'method' => 'POST',
    'hasFiles' => false
])

<a type="button" class="dashboard-modal-button" id="{{$id . '-button'}}"
   data-bs-toggle="modal"
   data-bs-target="{{'#'. $id}}"
   data-tippy-content="{{$button}}">
    @svg('heroicon-o-cog-6-tooth')
</a>

<div class="modal fade" id="{{$id}}" tabindex="-1" aria-labelledby="{{$id . 'ModalLabel'}}" aria-hidden="true">
    <form
        method="{{$method}}"
        action="{{$action}}"
        {{$hasFiles ? 'enctype=multipart/form-data' : ''}}
        style="height: 100%;">
        <div class="modal-dialog modal-xl modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">

                    <h1 class="modal-title fs-5 fw-bold text-uppercase" id="{{$id . 'ModalLabel'}}">
                        {{$title}}
                    </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                </div>
                <div class="modal-body">
                    @csrf
                    {{$slot}}
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </form>

</div>
