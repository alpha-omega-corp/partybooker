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

    <div class="advert-preview profile-info advert-info">
        @if(!$advertService->canPublish())
            <x-partner.publication-matrix :partner="$user->partnerInfo" :matrix="$canPublishMatrix"/>
        @endif
    </div>

    <div class="row p-4">
        <div class="col-lg-8 col-md-12">
            <x-dashboard.header/>

            <div class="profile-info advert-info mt-5">


                <x-partner-category-tab
                    :tabs="[
                    __('partner.nav-gallery'),
                    __('partner.nav-option'),
                    'Description',
                    __('partner.nav-ratings'),
                    __('partner.nav-coordinates'),
                    'Contact']">
                    <x-slot name="title">
                        <div>
                            <div class="serviceDetails">
                                @include('web.partner.profile.category-images')
                            </div>
                        </div>
                    </x-slot>

                    <x-tab.item>

                        <x-dashboard.profile-section icon="heroicon-o-photo" modal="galleryModal">
                            <x-slot:title>
                                Gallery
                                <br>
                                Uploaded photos
                            </x-slot:title>

                            <x-slot:edit>
                                <a type="button" class="dashboard-modal-button rounded-circle shadow-lg"
                                   data-bs-toggle="modal"
                                   id="galleryModal-button"
                                   data-bs-target="#galleryModal">
                                    @svg('heroicon-o-photo')
                                </a>
                            </x-slot:edit>

                            <div class="gallery">
                                <?php $locale = app()->getLocale(); ?>
                                @foreach($categoryImages as $category => $data)

                                    @php
                                        $images = count($data['images']) === 0 ? count($data['images']) : count($data['images']) - 1;
                                        $allowed = $data['count'];
                                    @endphp

                                    <div class="d-flex flex-wrap justify-content-start">

                                        @if(count($data['images']) > 0)
                                            @foreach($data['images'] as $img)
                                                @if(!$img['is_main'])
                                                    <div class="gallery-item">
                                                        <img src="{{ asset('storage/images/'.$img['image_name'])}}"
                                                             data-imageId="{{$img['id']}}"
                                                             alt="{{$img['image_alt_'.$locale]}}"
                                                        />

                                                        <div class="delete-gallery-image">
                                                            <div class="del btn btn-danger"
                                                                 data-img="{{$img['image_name']}}"
                                                                 data-image-id="{{$img['id']}}"
                                                                 data-id="{{$user->id_partner}}">
                                                                @svg('heroicon-o-trash')
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endif
                                            @endforeach
                                        @endif
                                    </div>

                                    <hr>
                                    <div class="imgNumber" data-max="{{$data['count'] - 1}}">
                                        <p class="fw-bold">{{$images . ' / ' . $allowed}}</p>
                                    </div>
                                @endforeach
                            </div>
                        </x-dashboard.profile-section>

                    </x-tab.item>

                    <x-tab.item>
                        @include('web.partner.profile.plan-options')
                    </x-tab.item>

                    <x-tab.item>
                        <x-dashboard.profile-section icon="heroicon-o-home-modern">
                            <x-slot name="title">
                                Description
                                <br>
                                {{ __('become_partner.slogan') }}
                            </x-slot>

                            <div class="company-description-card" x-data="{modal: 'editCompanyDescription'}"
                                 @click="openModalPrevent(modal)">

                                <div class="d-flex justify-content-start">
                                    <img src="{{Vite::image('icons/france.svg')}}" alt="french">

                                    <div class="company-description-item">
                                        <h5>
                                            {{__('become_partner.slogan')}}
                                        </h5>

                                        <div>
                                            @if($user->partnerInfo->fr_slogan)
                                                {{$user->partnerInfo->fr_slogan}}
                                            @else
                                                @svg('heroicon-o-no-symbol')
                                            @endif
                                        </div>
                                    </div>

                                    <div class="company-description-item">
                                        <h5>
                                            {{__('become_partner.short_descr')}}
                                        </h5>

                                        <div>
                                            @if($user->partnerInfo->fr_short_descr)
                                                {!!$user->partnerInfo->fr_short_descr!!}
                                            @else
                                                @svg('heroicon-o-no-symbol')
                                            @endif
                                        </div>
                                    </div>

                                    <div class="company-description-item">
                                        <h5>
                                            {{__('become_partner.full_descr')}}
                                        </h5>

                                        <div>
                                            @if($user->partnerInfo->fr_full_descr)
                                                {!!$user->partnerInfo->fr_full_descr!!}
                                            @else
                                                @svg('heroicon-o-no-symbol')
                                            @endif
                                        </div>
                                    </div>

                                </div>


                                <!-- English -->

                                <div class="d-flex justify-content-start">
                                    <img src="{{Vite::image('icons/uk-flag.svg')}}" alt="english">

                                    <div class="company-description-item">
                                        <h5>
                                            {{__('become_partner.slogan')}}
                                        </h5>

                                        <div>
                                            @if($user->partnerInfo->en_slogan)
                                                {{$user->partnerInfo->en_slogan}}
                                            @else
                                                @svg('heroicon-o-no-symbol')
                                            @endif
                                        </div>
                                    </div>

                                    <div class="company-description-item">
                                        <h5>
                                            {{__('become_partner.short_descr')}}
                                        </h5>

                                        <div>
                                            @if($user->partnerInfo->en_short_descr)
                                                {!!$user->partnerInfo->en_short_descr!!}
                                            @else
                                                @svg('heroicon-o-no-symbol')
                                            @endif
                                        </div>
                                    </div>

                                    <div class="company-description-item">
                                        <h5>
                                            {{__('become_partner.full_descr')}}
                                        </h5>

                                        <div>
                                            @if($user->partnerInfo->en_full_descr)
                                                {!!$user->partnerInfo->en_full_descr!!}
                                            @else
                                                @svg('heroicon-o-no-symbol')
                                            @endif
                                        </div>
                                    </div>
                                </div>


                                @include('web.partner.popup.edit-company-description')

                            </div>


                        </x-dashboard.profile-section>
                    </x-tab.item>

                    <x-tab.item>
                        <x-dashboard.profile-section icon="heroicon-o-hand-raised">
                            <x-slot name="title">
                                {{ __('partner.based_on') }}
                                <br>
                                {{ $user->partnerInfo->votes ?? 0 }}
                                {{ __('partner.rates') }}

                            </x-slot>
                        </x-dashboard.profile-section>
                        <div class="advert-review">
                            @include('web.partner.partials.dashboard.evaluation')
                        </div>

                        @include('web.partner.partials.dashboard.statistics')

                    </x-tab.item>

                    <x-tab.item>
                        <div id="editLocation" class="edit-location"></div>
                        <form method="POST" id="editLocation" action="{{
                                Auth::user()->type == 'admin'
                                    ? url(App\Http\Middleware\LocaleMiddleware::getLocale().'/cp/partner-cp/edit-company-location')
                                    : url(App\Http\Middleware\LocaleMiddleware::getLocale().'/partner-cp/edit-company-location')
                                }}">
                            @csrf
                            @include('partial.map_company')
                            <hr>
                            <button type="submit" class="btn btn-accent w-100">Save</button>
                        </form>
                    </x-tab.item>

                    <x-tab.item>
                        <section class="contact-section mt-4">
                            <div class="d-flex justify-content-center">
                                <div class="contact-card">
                                    <div class="d-flex">
                                        <div class="d-flex align-items-center justify-content-center">
                                            <img src="{{Vite::image('contacts.svg')}}" alt="" width="120">
                                        </div>

                                        <div class="w-100">
                                            <form method="POST"
                                                  action="{{route('partner-contact')}}">
                                                @csrf
                                                <div class="input-group mb-3">
                                                    <span class="input-group-text" id="contact-message">
                                                        @svg('heroicon-o-chat-bubble-bottom-center-text')
                                                    </span>

                                                    <textarea name="message"
                                                              class="form-control"
                                                              placeholder="{{__('main.contacts_message')}}"
                                                              aria-label="{{__('main.contacts_message')}}"
                                                              aria-describedby="contact-message"></textarea>
                                                </div>

                                                <button class="btn btn-accent w-100">
                                                    @svg('heroicon-o-arrow-right')
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <hr>
                            <div class="d-flex justify-content-center">
                                <div>

                                    <ul>
                                        <li>
                                            <a href="mailto:contact@partybooker.ch" class="email">
                                                {{$settings[0]->email}}
                                            </a>
                                        </li>

                                        <li>
                                            <a href="tel:{{$settings[0]->phone}}" class="phone">
                                                {{$settings[0]->phone}}
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                        </section>
                    </x-tab.item>
                </x-partner-category-tab>
            </div>
        </div>


        <div class="col-lg-4 col-md-12">
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


            <x-dashboard.card :title="$user->partnerInfo->fr_company_name">
                <x-slot:badge>
                    @if ($user->partnerInfo->public == 0)
                        <span
                            class="status-badge badge text-bg-danger text-white">{{ __('partner.not_published') }}</span>
                    @else
                        <span
                            class="status-badge badge text-bg-accent text-white">{{ __('partner.published') }}</span>
                    @endif
                </x-slot:badge>

                @if($advertService->canPublish())
                    @include('web.partner.partials.dashboard.advert-status')
                    <a class="see-advert text-uppercase" target="_blank"
                       href="{{url(LocaleMiddleware::getLocale() . '/' . __('urls.listing') . '/' . $user->partnerInfo->slug)}}">
                        View page
                    </a>
                @endif
            </x-dashboard.card>

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


            <div class="company-card" x-data="{modal: 'editCompany'}"
                 @click="openModalPrevent(modal)">
                <x-dashboard.card :title="__('become_partner.company_info')">
                    @include('web.partner.profile.company')
                </x-dashboard.card>
            </div>

            <div x-data="{modal: 'editContacts'}"
                 @click="openModalPrevent(modal)" class="coordinates-card">
                <x-dashboard.card :title="__('become_partner.contact_details')">
                    <hr>
                    @svg('heroicon-o-identification')
                    {{$user->name}}
                    <hr>
                    @svg('heroicon-m-device-phone-mobile')
                    {{$user->partnerInfo->phone}}
                    <hr>
                    @svg('heroicon-o-envelope')
                    {{$user->email}}
                    <hr>

                    @include('web.partner.popup.edit-contacts')
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

