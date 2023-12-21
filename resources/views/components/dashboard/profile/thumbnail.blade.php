@props([
    'thumbnail',
    'partner'
])

<div class="no-thumbnail-container">
    @if(!$partner->main_img)
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

@php
    $locale = app()->getLocale();
@endphp

<div class="main-image" x-data="{target: 'editMainImageModel-button'}"
     @click="document.getElementById(target).click()">
    @if($thumbnail)
        <img src="{{ asset('/storage/images/thumbnails/'.$thumbnail['image_name'])}}"
             data-imageId="{{$thumbnail['id']}}"
             alt="{{$thumbnail['image_alt_'.$locale]}}"/>
    @endif

    <div class="preview-settings">
        <a type="button" class="preview-setting" id="editMainImageModel-button"
           data-bs-toggle="modal"
           data-bs-target="#editMainImageModel">
            @svg('heroicon-o-cog-6-tooth')
        </a>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="editMainImageModel" tabindex="-1"
     aria-labelledby="editMainImageModelLabel"
     aria-hidden="true">
    <div class="modal-dialog">
        <form method="POST" action="{{
                    Auth::user()->type == 'admin'
                    ? route('thumbnail.update.admin')
                    : route('thumbnail.update')
                }}" enctype=multipart/form-data>

            @csrf

            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5 text-uppercase fw-bold" id="editMainImageModelLabel">
                        {{__('partner.edit_main_image')}}
                    </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <label for="thumbnail">
                        <div class="d-flex">
                            <div id="logo-btn"
                                 class="button btn btn-primary d-none">
                                {{__('partner.choose_logo')}}
                            </div>
                        </div>
                        <div class="zone"></div>

                        <input type="file" id="thumbnail" name="thumbnail" class="imagesFileUpload" hidden>
                    </label>


                    <input type="hidden" name="partnerId" value="{{$partner->id_partner}}"/>

                    <button type="button" class="btn btn-accent w-100 text-uppercase" x-data="{target: 'thumbnail'}"
                            @click="document.getElementById(target).click()">
                        {{__('form.thumbnail')}}
                    </button>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                        Close
                    </button>
                    <button type="submit" class="btn btn-primary">
                        {{__('partner.save')}}
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
