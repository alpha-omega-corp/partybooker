<div class="tab" tab="profile" style="display: block">
    @include('web.partner.notify')
    <div class="profile-info">
        @include('web.partner.profile.contacts')
        @include('web.partner.profile.company')
        @include('web.partner.profile.www')
        @if (Auth::user()->type == 'admin')
            @include('web.partner.profile.seo')
        @endif
        @include('web.partner.profile.vip')
        @if ($user->partnerInfo->currentPlan)
            @include('web.partner.profile.plan-options')
            @include('web.partner.profile.category')
        @endif
        @include('web.partner.profile.event-types')

        @if (
            $user->partnerInfo->currentPlan &&
                !in_array(strtolower($user->partnerInfo->currentPlan->name), ['basic', 'commission']))
            @foreach ($adverts as $k => $advert)
                @if ($advert->status == \App\Models\Advert::STATUS_DRAFT)
                    <ul class="serviceDetails{{ $k + 1 }} attention">
                        <li block="serviceDetails{{ $k + 1 }}">
                            <h4>{{ __('partner.service_details') }} #{{ $k + 1 }}: </h4> {{ __('service.for') }}
                            {{ __('service.' . $advert->view_name) }}
                        </li>
                        <li class="li">{{ __('partner.fill_service_details') }}</li>
                        <li class="li"><a href="#" class="button fulfilDetails">{{ __('partner.edit') }}</a></li>
                    </ul>
                    @include('web.partner.advert.create-forms.' . $advert->view_name)
                @elseif($advert->status == \App\Models\Advert::STATUS_INACTIVE)
                    {{-- <ul class="serviceDetails{{$k+1}}">
						<li block="serviceDetails{{$k+1}}"><h4>{{__('partner.service_details')}} #{{$k+1}}: </h4>  </li>
						<li class="li">{{__('partner.fill_service_details')}}</li>
						<li class="li"><a href="#" class="button fulfilDetails">{{__('partner.edit')}}</a></li>
					</ul> --}}
                @else
                    @include('web.partner.advert.details.' . $advert->view_name, [
                        'iterator' => $k + 1,
                        'advert' => $advert,
                    ])
                @endif
            @endforeach
        @endif


        @include('web.partner.profile.category-images')

        @include('web.partner.popup.edit-contacts')
        @include('web.partner.popup.edit-company')
        @include('web.partner.popup.edit-www')
        @if (Auth::user()->type == 'admin')
            @include('web.partner.popup.edit-seo')
        @endif
        @if ($user->partnerInfo->currentPlan)
            @include('web.partner.popup.edit-option')
            @include('web.partner.popup.edit-category')
        @endif
        @if ($user->partnerInfo->vipPlan)
            @include('web.partner.popup.edit-vip')
        @endif
        @if ($user->partnerInfo->currentPlan && $user->partnerInfo->currentPlan->name == 'Exclusif')
            @include('web.partner.popup.edit-event-types')
        @endif
        @if (Auth::user()->type == 'admin')
            @include('web.partner.popup.edit-image')
        @endif
    </div>
</div>

@push('header')
    <link rel="stylesheet" href="{{ asset('plugins/kendo/kendo.common.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/kendo/kendo.default.min.css') }}">
    <script src="https://cdn.tiny.cloud/1/{{ env('TINYMCE_API_KEY') }}/tinymce/5/tinymce.min.js" referrerpolicy="origin">
    </script>
@endpush

@push('footer')
    <script src="{{ Vite::image('plugins/kendo/kendo.all.min.js') }}"></script>
    <script>
        tinymce.init({
            selector: '.textarea-wysiwyg',
            // plugins: 'print preview fullpage paste  save code fullscreen link template codesample table charmap hr  advlist lists wordcount noneditable charmap',
            plugins: 'fullpage paste code fullscreen link template hr advlist lists wordcount noneditable charmap',
            menubar: 'edit view format table',
            toolbar: 'bold italic underline strikethrough | fontselect fontsizeselect formatselect | alignleft aligncenter alignright alignjustify | outdent indent |  numlist bullist | removeformat | fullscreen  preview  | link anchor',
            toolbar_sticky: true,
            height: 900,
            setup: function(editor) {
                editor.on('change', function() {
                    editor.save();
                    var lang = $('div.lang-nav ul li.active').attr('lan');
                    if ($('#' + editor.id + '_ifr').contents().find('body')[0].innerText.length > 1) {
                        $('li.post.' + lang + ' span').addClass('ok').html('OK');
                    } else {
                        $('li.post.' + lang + ' span').removeClass('ok').html('NaN');
                    }
                });
            }
        });

        $(document).ready(function() {
            $('.tox-notification__dismiss').click();
        });
    </script>
@endpush
