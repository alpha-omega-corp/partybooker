@props([
'gallery'
])

<div class="gallery position-relative">
    <?php $locale = app()->getLocale(); ?>
    <a type="button" class="dashboard-modal-button rounded-circle shadow-lg"
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

    @endforeach
</div>
