<x-dashboard.modal
    id="editOption"
    title="Configuration"
    :button="__('partner.edit')"
    :action="Auth::user()->type == 'admin'
        ? route('option.update.admin')
        : route('option.update')"
    :has-button="false"
    size="modal-sm"
    :save-label="__('form.yes')"
    method="POST">

    <input type="hidden" id="optionChoice">

    <x-dashboard.card-info>
        {{ucfirst(__('form.edit-option-warning'))}}
    </x-dashboard.card-info>

    <div class="d-none" x-data="{option: document.getElementById('optionChoice').value}">
        @foreach($options as $k => $option)
            <span class="radio-item">
                {{$partner->plan_option_group}}
                <label for="option_{{$k}}"></label>
                <input id="option_{{$k}}" type="radio"
                       name="option"
                       value="{{$option['group']}}"
                       x-model="option"/>
                <span class="text-gray">{{$option['name']}}</span>
            </span>
        @endforeach
    </div>


    <input type="hidden" name="id_partner" value="{{$partner->id_partner}}"/>

</x-dashboard.modal>


@push('footer')
    <script>
        let groupCurrent = '{{$partner->plan_option_group}}';
        $('#editOption .btn-primary').on('click', function () {
            $('.radio-item').append('<span class="checkmark"></span>');
            $('div.options #option_' + groupCurrent).click();
        });
    </script>
@endpush


