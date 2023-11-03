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

    <div class="row p-4 pt-0">
        <div class="col-lg-8 col-md-12">
            <x-dashboard.header>
                <div class="statistics">

                    <div class="d-flex">
                        <x-dashboard.stat-card
                            :title="__('partner.views')"
                            :value="$user->partnerInfo->statistic->view"
                            icon="heroicon-o-eye"
                        />

                        <x-dashboard.stat-card
                            :title="__('become_partner.phone')"
                            :value="$user->partnerInfo->statistic->view"
                            icon="heroicon-o-phone"
                        />

                        <x-dashboard.stat-card
                            :title="__('partner.email')"
                            :value="$user->partnerInfo->statistic->email"
                            icon="heroicon-o-envelope"
                        />

                        <x-dashboard.stat-card
                            :title="__('become_partner.website')"
                            :value="$user->partnerInfo->statistic->website"
                            icon="heroicon-o-globe-alt"
                        />


                        <x-dashboard.stat-card
                            :title="__('become_partner.address')"
                            :value="$user->partnerInfo->statistic->address"
                            icon="heroicon-o-map-pin"
                        />


                        <x-dashboard.stat-card
                            :title="__('partner.direct_requests')"
                            :value="$user->partnerInfo->statistic->direct"
                            icon="heroicon-o-archive-box"
                        />
                    </div>

                    <div class="d-flex">
                        <?php $networks = ['Facebook', 'Twitter', 'Instagram', 'Linkedin', 'Vimeo', 'Youtube']; ?>
                        @foreach ($networks as $network)
                                <?php $lc = strtolower($network); ?>

                            <x-dashboard.stat-card
                                :title="$network"
                                :value="$user->partnerInfo->statistic->$lc"
                                :image="$lc . '.svg'"
                            />
                        @endforeach
                    </div>
                </div>
            </x-dashboard.header>

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
                                    <x-dashboard.company-description-item
                                        :title="__('become_partner.slogan')"
                                        :item="$user->partnerInfo->fr_slogan"/>

                                    <x-dashboard.company-description-item
                                        :title="__('become_partner.short_descr')"
                                        :item="$user->partnerInfo->fr_short_descr"/>

                                    <x-dashboard.company-description-item
                                        :title="__('become_partner.full_descr')"
                                        :item="$user->partnerInfo->fr_full_descr"/>
                                </div>
                                <!-- English -->
                                <div class="d-flex justify-content-start">
                                    <img src="{{Vite::image('icons/uk-flag.svg')}}" alt="english">

                                    <x-dashboard.company-description-item
                                        :title="__('become_partner.slogan')"
                                        :item="$user->partnerInfo->en_slogan"/>

                                    <x-dashboard.company-description-item
                                        :title="__('become_partner.short_descr')"
                                        :item="$user->partnerInfo->en_short_descr"/>

                                    <x-dashboard.company-description-item
                                        :title="__('become_partner.full_descr')"
                                        :item="$user->partnerInfo->en_full_descr"/>


                                    @include('web.partner.popup.edit-company-description')

                                </div>
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
                    </x-tab.item>

                    <x-tab.item>

                        <x-dashboard.profile-section icon="heroicon-o-map-pin">
                            <x-slot name="title">
                                {{__('partner.nav-coordinates')}}
                                <br>
                                {{$user->partnerInfo->address}}
                            </x-slot>

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
                        </x-dashboard.profile-section>


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


            <div class="company-card" x-data="{modal: 'editCompany'}"
                 @click="openModalPrevent(modal)">
                <x-dashboard.card :title="__('become_partner.company_info')">
                    @include('web.partner.profile.company')
                </x-dashboard.card>
            </div>

            <div x-data="{modal: 'editContacts'}"
                 @click="openModalPrevent(modal)" class="coordinates-card">
                <x-dashboard.card :title="__('become_partner.contact_details')">

                    <div class="user-info-item" data-tippy-content="{{__('partner.name')}}">
                        @svg('heroicon-o-identification')
                        {{$user->name}}
                    </div>

                    <div class="user-info-item" data-tippy-content="{{__('partner.mobile')}}">
                        @svg('heroicon-m-device-phone-mobile')
                        {{$user->partnerInfo->phone}}
                    </div>
                    <hr>

                    <div class="user-info-item" data-tippy-content="{{__('partner.email')}}">
                        @svg('heroicon-o-envelope')
                        {{$user->email}}
                    </div>


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

