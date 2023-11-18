@props([
    'images',
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


@foreach($images as $category => $data)
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
