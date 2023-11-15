@php use App\Http\Middleware\LocaleMiddleware; @endphp
@extends('web.main')
@section('page')
    page="cp"
@endsection

@section('title')
    <title>Advert | {{ __('partybooker-cp.www')}}</title>
@endsection


@push('header')
    <link rel="stylesheet" href="{{ asset('/plugins/kendo/kendo.common.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/plugins/kendo/kendo.default.min.css') }}">
@endpush

@push('footer')
    <script src="{{ asset('/plugins/kendo/kendo.all.min.js') }}"></script>
@endpush



@section('content')

    @php
        $planUrl = url(LocaleMiddleware::getLocale().'/partner-cp/'.$user->id_partner) . '/plans'
    @endphp

    <div class="dashboard-top-options">
        <div class="d-flex justify-content-between">
            <div class="d-flex align-items-center">
                <h3 class="text-uppercase fw-bold">{{__('partner.statistics')}}</h3>
            </div>
            <x-dashboard.profile.statistics :statistics="$user->partnerInfo->statistic"/>
        </div>

        <div class="d-flex justify-content-between">
            <div class="d-flex align-items-center">
                <h3 class="text-uppercase fw-bold">{{__('partner.plan_options')}}</h3>
            </div>
            <x-dashboard.profile.options
                :partner="$user->partnerInfo"
                :partner-options="$partnerPlanOptions"
                :options="$planOptions"
            />
        </div>
    </div>


    <div class="dashboard-body">
        <div class="row">
            <div class="col-xl-8 col-lg-7 col-md-12">
                <x-dashboard.header>
                    <div class="advert-preview profile-info advert-info">
                        @if(!$advertService->canPublish())
                            <x-partner.publication-matrix :partner="$user->partnerInfo" :matrix="$canPublishMatrix"/>
                        @endif
                    </div>


                </x-dashboard.header>


                <x-dashboard.card :title="__('partner.categories')">
                    <x-dashboard.profile.category
                        :partner="$user->partnerInfo"
                        :partner-categories="$currentCategories"
                        :active-options="$planOptions"
                        :partner-options="$partnerPlanOptions"
                        :categories="$categoriesList"/>
                </x-dashboard.card>

                <x-dashboard.profile.pages :gallery-images="$categoryImages"/>

            </div>


            <div class="col-xl-4 col-lg-5 col-md-12">
                <div class="no-thumbnail-container">
                    @if(!$user->partnerInfo->main_img)

                        <div class="no-thumbnail" x-data="{modal: 'editMainImageModel'}"
                             @click="openModalPrevent(modal)">
                            <div class="d-flex justify-content-center align-items-center  w-100">
                                @svg('heroicon-o-photo', 'no-thumbnail-icon')
                            </div>

                            <div class="preview-settings">
                                <a type="button" class="preview-setting" id="editMainImageModel-button"
                                   data-bs-toggle="modal"
                                   data-bs-target="#editMainImageModel">
                                    @svg('heroicon-o-cog-6-tooth')
                                </a>
                            </div>
                        </div>
                    @endif
                </div>


                @foreach($categoryImages as $category => $data)
                    @php
                        $locale = app()->getLocale();
                    @endphp

                    @foreach($data['images'] as $img)
                        @if($img['is_main'])
                            <div class="main-image" x-data="{target: 'editMainImageModel-button'}"
                                 @click="document.getElementById(target).click()">
                                <img src="{{ asset('storage/images/thumbnails/'.$img['image_name'])}}"
                                     data-imageId="{{$img['id']}}"
                                     alt="{{$img['image_alt_'.$locale]}}"/>

                                <div class="preview-settings">
                                    <a type="button" class="preview-setting" id="editMainImageModel-button"
                                       data-bs-toggle="modal"
                                       data-bs-target="#editMainImageModel">
                                        @svg('heroicon-o-cog-6-tooth')
                                    </a>
                                </div>
                            </div>
                        @endif
                    @endforeach
                @endforeach

                <x-dashboard.card :title="$user->partnerInfo->fr_company_name">
                    <x-slot:badge>
                        @if ($user->partnerInfo->public == 0)
                            <span
                                class="status-badge badge text-bg-danger text-white">{{ __('partner.not_published') }}</span>
                        @else
                            <span
                                class="status-badge badge text-bg-primary text-white">{{ __('partner.published') }}</span>
                        @endif
                    </x-slot:badge>

                    @if($advertService->canPublish())
                        @include('web.partner.partials.dashboard.advert-status')

                        <hr>
                        <x-dashboard.company-info :tooltip="__('partner.link')" icon="heroicon-o-globe-alt">
                            <a target="_blank" class="text-gray"
                               href="{{url(LocaleMiddleware::getLocale() . '/' . __('urls.listing') . '/' . $user->partnerInfo->slug)}}">
                                {{'partybooker.ch/' . __('urls.listing') . '/' . $user->partnerInfo->slug}}
                            </a>
                        </x-dashboard.company-info>

                    @endif
                </x-dashboard.card>

                <x-dashboard.card
                    :title="__('partner.based_on') . ' ' . ($user->partnerInfo->votes ?? 0) . ' ' . __('partner.rates')">
                    <div class="advert-review">
                        @include('web.partner.partials.dashboard.evaluation')
                    </div>
                </x-dashboard.card>


                <x-dashboard.card :title="__('become_partner.company_info')">
                    <x-dashboard.profile.company :partner="$user->partnerInfo" :location="$location"/>
                </x-dashboard.card>


                <x-dashboard.card title="Description">
                    <x-dashboard.profile.company-description/>
                </x-dashboard.card>

                <x-dashboard.card :title="__('partner.socials')">
                    <x-dashboard.profile.networks :partner="$user->partnerInfo"/>
                </x-dashboard.card>


                <x-dashboard.card :title="__('become_partner.contact_details')">
                    <x-dashboard.profile.contact-details :user="$user"/>
                </x-dashboard.card>


            </div>
        </div>
    </div>

@endsection


@push('header')
    <script src="https://cdn.tiny.cloud/1/{{ env('TINYMCE_API_KEY') }}/tinymce/5/tinymce.min.js"
            referrerpolicy="origin">
    </script>
@endpush

@push('footer')
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

