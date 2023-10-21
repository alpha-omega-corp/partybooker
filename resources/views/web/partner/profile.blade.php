@php use App\Models\Advert; @endphp
<div class="tab" tab="profile" style="display: block">
    @include('web.partner.notify')
    <div class="profile-info">

        <x-dashboard.card :title="__('become_partner.contact_details')">
            <div class="contactDetails">
                @include('web.partner.profile.contacts')
            </div>
        </x-dashboard.card>

        <x-dashboard.card :title="__('become_partner.company_info')">
            <div class="companyDetails">
                @include('web.partner.profile.company')
            </div>
        </x-dashboard.card>

        <x-dashboard.card title="Location">
            <form method="POST" action="{{
                Auth::user()->type == 'admin'
                    ? url(App\Http\Middleware\LocaleMiddleware::getLocale().'/cp/partner-cp/edit-company-location')
                    : url(App\Http\Middleware\LocaleMiddleware::getLocale().'/partner-cp/edit-company-location')
                }}">
                @csrf
                @include('partial.map_company')
                <hr>
                <button type="submit" class="btn btn-primary w-100">Save</button>
            </form>
        </x-dashboard.card>

        <x-dashboard.card :title="__('partner.socials')">
            <div class="socialLiks">
                @include('web.partner.profile.www')
            </div>
        </x-dashboard.card>

        @if (Auth::user()->type == 'admin')
            <x-dashboard.card title="seo">
                <div class="seo">
                    @include('web.partner.profile.seo')
                </div>
            </x-dashboard.card>
        @endif

        @if ($user->partnerInfo->currentPlan)
            <x-dashboard.card :title="__('partner.plan_options')">
                <div class="optionPlan">
                    @include('web.partner.profile.plan-options')
                </div>
            </x-dashboard.card>

            <x-dashboard.card :title="__('partner.category')">
                <div class="categorySubcat">
                    @include('web.partner.profile.category')
                </div>
            </x-dashboard.card>
        @endif


        @include('web.partner.profile.vip')


        @include('web.partner.profile.event-types')

        @if (
            $user->partnerInfo->currentPlan &&
                !in_array(strtolower($user->partnerInfo->currentPlan->name), ['basic', 'commission']))
            @foreach ($adverts as $k => $advert)
                @if ($advert->status == Advert::STATUS_DRAFT)
                    <ul class="serviceDetails{{ $k + 1 }} attention">
                        <li block="serviceDetails{{ $k + 1 }}">
                            <h4>{{ __('partner.service_details') }} #{{ $k + 1 }}: </h4> {{ __('service.for') }}
                            {{ __('service.' . $advert->view_name) }}
                        </li>
                        <li class="li">{{ __('partner.fill_service_details') }}</li>
                        <li class="li"><a href="#" class="button fulfilDetails">{{ __('partner.edit') }}</a></li>
                    </ul>
                    @include('web.partner.advert.create-forms.' . $advert->view_name)
                @elseif($advert->status == Advert::STATUS_INACTIVE)
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
    <link rel="stylesheet" href="{{ asset('/plugins/kendo/kendo.common.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/plugins/kendo/kendo.default.min.css') }}">
    <script src="https://cdn.tiny.cloud/1/{{ env('TINYMCE_API_KEY') }}/tinymce/5/tinymce.min.js"
            referrerpolicy="origin">
    </script>
@endpush

@push('footer')
    <script src="{{ asset('/plugins/kendo/kendo.all.min.js') }}"></script>
    <script>
        tinymce.init({
            selector: '.textarea-wysiwyg',
            // plugins: 'print preview fullpage paste  save code fullscreen link template codesample table charmap hr  advlist lists wordcount noneditable charmap',
            plugins: 'fullpage paste code fullscreen link template hr advlist lists wordcount noneditable charmap',
            menubar: 'edit view format table',
            toolbar: 'bold italic underline strikethrough | fontselect fontsizeselect formatselect | alignleft aligncenter alignright alignjustify | outdent indent |  numlist bullist | removeformat | fullscreen  preview  | link anchor',
            toolbar_sticky: true,
            height: 300,
            setup: function (editor) {
                editor.on('change', function () {
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

        $(document).ready(function () {
            $('.tox-notification__dismiss').click();
        });
    </script>
@endpush

