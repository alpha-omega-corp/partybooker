@props([
'gallery',
'user'
])
@if(in_array(strtolower($user->partnerInfo->plan), ['basic', 'commission']))
    <x-dashboard.card-info>
        {{__('partner.gallery_info')}}
    </x-dashboard.card-info>
@else
    <div class="gallery position-relative">
            <?php $locale = app()->getLocale(); ?>
        <a type="button" class="dashboard-modal-button rounded-circle shadow-lg"
           data-tippy-content="{{__('partner.edit')}}"
           data-bs-toggle="modal"
           id="galleryModal-button"
           data-bs-target="#galleryModal">
            @svg('heroicon-o-photo')
        </a>

        @foreach($gallery as $category => $data)
            @php
                $images = count($data['images']) === 0 ? count($data['images']) : count($data['images']) - 1;
                $allowed = $data['count'];
            @endphp

            <div class="imgNumber p-4" data-max="{{$data['count'] - 1}}">
                <p class="fw-bold text-center">{{$images . ' / ' . $allowed}}</p>
            </div>

            <div class="d-flex flex-wrap justify-content-center">

                @if(count($data['images']) > 0)
                    @foreach($data['images'] as $key => $img)
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

                                <div class="edit-gallery-image">
                                    <div class="btn btn-accent edit-gallery-button"
                                         x-data="{modal: 'editImageSeo{{$key}}'}"
                                         @click="openModalPrevent(modal)"
                                         data-tippy-content="SEO">

                                        @svg('heroicon-o-pencil-square')
                                    </div>
                                </div>
                            </div>

                            <div class="image-alt-card">
                                <x-dashboard.modal
                                    id="editImageSeo{{$key}}"
                                    :button="__('partner.edit')"
                                    size="modal-md"
                                    title="SEO Image"
                                    :has-button="false"
                                    :action="route(\Illuminate\Support\Facades\Auth::user()->type == 'admin' ? 'alt.update.admin' : 'alt.update')"
                                    method="POST">
                                    <div class="text-gray">

                                        <div class="d-flex justify-content-center">
                                            <div class="gallery-item">
                                                <img src="{{ asset('storage/images/'.$img['image_name'])}}"
                                                     data-imageId="{{$img['id']}}"
                                                     alt="{{$img['image_alt_'.$locale]}}"
                                                     width="200"
                                                />
                                            </div>

                                        </div>

                                        <input type="hidden" name="imageId" value="{{$img['id']}}"/>
                                        <input type="hidden" name="partnerId" value="{{$user->id_partner}}"/>
                                        <div class="d-flex align-items-center">
                                            <img src="{{Vite::image('icons/uk-flag.svg')}}" class="flag-alt" alt="SEO"/>
                                            <x-dashboard.input
                                                name="alt_fr"
                                                placeholder="Description"
                                                :value="$img['image_alt_en']"
                                                icon="heroicon-o-megaphone"/>
                                        </div>

                                        <div class="d-flex align-items-center">
                                            <img src="{{Vite::image('icons/france.svg')}}" class="flag-alt" alt="SEO"/>
                                            <x-dashboard.input
                                                name="alt_en"
                                                placeholder="Description"
                                                :value="$img['image_alt_fr']"
                                                icon="heroicon-o-megaphone"/>
                                        </div>

                                    </div>
                                </x-dashboard.modal>
                            </div>
                        @endif
                    @endforeach
                @endif
            </div>

        @endforeach
    </div>
@endif

