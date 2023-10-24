@php use App\Models\Advert; @endphp

<div class="profile-info">

    @if ($user->partnerInfo->currentPlan &&
     $user->partnerInfo->categories->count() > 0 &&
      !in_array(strtolower($user->partnerInfo->currentPlan->name), ['basic', 'commission']))

        <x-dashboard.card :title="__('partner.service_details')">
            @include('web.partner.profile.service-details')
        </x-dashboard.card>
    @endif

    @if ($user->partnerInfo->currentPlan)
        <div class="row row-cc">
            <div class="col-lg-4 col-md-12">
                <x-dashboard.card :title="__('become_partner.contact_details')">
                    @include('web.partner.profile.contacts')
                </x-dashboard.card>
            </div>

            <div class="col-lg-4 col-md-12">
                <x-dashboard.card :title="__('partner.plan_options')">
                    @include('web.partner.profile.plan-options')
                </x-dashboard.card>
            </div>

            <div class="col-lg-4 col-md-12">
                <x-dashboard.card :title="__('partner.category')">
                    @include('web.partner.profile.category')
                </x-dashboard.card>
            </div>
        </div>
    @endif

    <hr>
    <div class="row">
        <div class="col-lg-6 col-md-12">

            <div class="row">
                <x-dashboard.card :title="__('partner.status')">
                    @include('web.partner.partials.dashboard.payment-status')
                </x-dashboard.card>
            </div>

            <div class="row">
                <x-dashboard.card :title="__('partner.image')">
                    <div class="serviceDetails">
                        @include('web.partner.profile.category-images')
                    </div>
                </x-dashboard.card>
            </div>

            <div class="row">
                <x-dashboard.card title="Location">
                    <form method="POST" id="editLocation" action="{{
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
            </div>

            <div class="row">
                <x-dashboard.card :title="__('partner.socials')">
                    @include('web.partner.profile.www')
                </x-dashboard.card>
            </div>


        </div>
        <div class="col-lg-6 col-md-12">
            <x-dashboard.card :title="__('become_partner.company_info')">
                @include('web.partner.profile.company')
            </x-dashboard.card>
        </div>

    </div>

    @if (Auth::user()->type == 'admin')
        <x-dashboard.card title="seo">
            <div class="seo">
                @include('web.partner.profile.seo')
            </div>
        </x-dashboard.card>
    @endif

    @include('web.partner.profile.vip')
    @include('web.partner.profile.event-types')





    @if (Auth::user()->type == 'admin')
        @include('web.partner.popup.edit-seo')
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

