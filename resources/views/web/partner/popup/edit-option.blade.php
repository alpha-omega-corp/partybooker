<x-dashboard.modal
    id="editOption"
    :title="__('partner.choose_option_of_your_plan')"
    :button="__('partner.edit')"
    :action="url(App\Http\Middleware\LocaleMiddleware::getLocale().'/partner-cp/edit-option')"
    method="POST">

    <div class="cp-plan-options d-flex flex-column">
        @foreach($planOptions as $option)
            <span class="radio-item">
                <label for="option_{{$option['group']}}"></label>
                <input id="option_{{$option['group']}}" type="radio"
                       name="option"
                       value="{{$option['group']}}">
                <span class="text-gray">{{$option['name']}}</span>
            </span>
        @endforeach
    </div>


    <label>
        <input type="text" name="id_partner" value="{{Auth::user()->id_partner}}" hidden/>
    </label>

</x-dashboard.modal>


@push('footer')
    <script>
        let groupCurrent = '{{$user->partnerInfo->plan_option_group}}';
        $('#editOption .btn-primary').on('click', function () {
            $('.radio-item').append('<span class="checkmark"></span>');
            $('div.options #option_' + groupCurrent).click();
        });
    </script>
@endpush


