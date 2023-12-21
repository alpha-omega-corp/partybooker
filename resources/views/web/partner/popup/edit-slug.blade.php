<x-dashboard.modal
    id="editSlug"
    :title="__('partner.edit_slug')"
    :button="__('partner.edit')"
    :action="Auth::user()->sanitizeRoute('/edit-company-slug')"

    size="modal-md"
    method="POST">

    <x-dashboard.input
        label="URL"
        name="slug"
        icon="heroicon-o-link"
        :value="$partner->slug"
    ></x-dashboard.input>

    <input type="hidden" value="{{$partner->id_partner}}" name="partner_id">

</x-dashboard.modal>

