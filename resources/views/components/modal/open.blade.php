<div class="{{$absolute ? 'modal-open-absolute' : ''}}" x-data="modal('{{$id}}')">

    <button
        type="button"
        class="tippy btn text-{{$color}}"
        @click="open"
        data-tippy-content="{{$type->name}}"
    >
        @svg($editIcon)
    </button>
</div>
