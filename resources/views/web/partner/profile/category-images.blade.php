<?php use App\Models\Category;

$i = 1; ?>
@foreach($categoryImages as $category => $data)
    @php
        $images = count($data['images']);
        $allowed = $data['count'];
    @endphp
    <div class="imgNumber" data-max="{{$data['count'] - 1}}">
        <div class="d-flex align-items-center">
            @svg('heroicon-o-photo', 'm-2')
            <span>{{$images . ' / ' . $allowed}}</span>
        </div>
    </div>

    <div class="row">
        <div class="gallery">
                <?php $locale = app()->getLocale(); ?>
            @foreach($data['images'] as $img)
                <div class="gal-img">
                    <!-- Modal -->
                    <div class="modal fade" id="editMainImageModel" tabindex="-1"
                         aria-labelledby="editMainImageModelLabel"
                         aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5 text-uppercase fw-bold" id="editMainImageModelLabel">
                                        {{__('partner.edit_main_image')}}
                                    </h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <li class="li">
                                        <div class="demo-section k-content">
                                            <input name="main_image" id="main_image_{{$category}}" type="file"
                                                   aria-label="files"/>
                                        </div>
                                    </li>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    @if($img['is_main'])
                        <div class="d-flex">
                            <div class="w-100">
                                <x-partner-adverts :partner="$user->partnerInfo">

                                    <img src="{{ asset('storage/images/thumbnails/'.$img['image_name'])}}"
                                         data-imageId="{{$img['id']}}"
                                         alt="{{$img['image_alt_'.$locale]}}"
                                         class="card-img"/>

                                </x-partner-adverts>
                            </div>
                            <div class="edit-main-image">
                                <div class="d-flex flex-column align-items-start justify-content-end">
                                    <a type="button" data-bs-toggle="modal" data-bs-target="#editMainImageModel">
                                        @svg('heroicon-o-cog-6-tooth', 'text-accent')
                                    </a>

                                    <div class="del mt-1" data-img="{{$img['image_name']}}"
                                         data-image-id="{{$img['id']}}"
                                         data-id="{{$user->id_partner}}">
                                        @svg('heroicon-o-trash', 'text-danger')
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
            @endforeach
            @if(!$user->partnerInfo->main_img)

                <!-- Modal -->
                <div class="modal fade" id="mainImageModal" tabindex="-1" aria-labelledby="mainImageModalLabel"
                     aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5 text-uppercase fw-bold" id="mainImageModalLabel">
                                    {{__('partner.upload_main_image')}}
                                </h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                            </div>
                            <div class="modal-body">

                                <li class="li">
                                    <div class="demo-section k-content">
                                        <input name="main_image" id="main_image_{{$category}}" type="file"
                                               aria-label="files"/>
                                    </div>
                                </li>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="d-flex">
                    <button type="button" id="addMainImage" class="btn btn-primary m-2 " data-bs-toggle="modal"
                            data-bs-target="#mainImageModal">
                        @svg('heroicon-o-plus')
                    </button>
                    <div class="w-100">
                        <x-partner-adverts :partner="$user->partnerInfo"/>
                    </div>
                </div>
            @endif


            <hr>


            <div class="gal-img gal-img-all">
                @if($allowed !== $images)
                    <a type="button" class="btn btn-primary mb-2 w-100" data-bs-toggle="modal"
                       data-bs-target="#galleryModal">
                        @svg('heroicon-o-plus')
                    </a>
                @endif


                <x-dashboard.accordion title="Gallery" name="galleryAccordion">
                    <div class="d-flex">
                        @if(count($data['images']) > 0)
                            @foreach($data['images'] as $img)
                                @if(!$img['is_main'])
                                    <div>
                                        <img src="{{ asset('storage/images/'.$img['image_name'])}}"
                                             data-imageId="{{$img['id']}}"
                                             alt="{{$img['image_alt_'.$locale]}}"
                                        />

                                        <div class="del btn btn-danger" data-img="{{$img['image_name']}}"
                                             data-image-id="{{$img['id']}}"
                                             data-id="{{$user->id_partner}}">
                                            @svg('heroicon-o-trash')
                                        </div>
                                    </div>
                                @endif
                            @endforeach

                        @else
                            <p class="text-uppercase fw-bold">No images yet</p>
                        @endif

                    </div>
                </x-dashboard.accordion>


                <!-- Modal -->
                <div class="modal fade" id="galleryModal" tabindex="-1" aria-labelledby="galleryModalLabel"
                     aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5 text-uppercase fw-bold" id="galleryModalLabel">
                                    {{__('partner.upload_images')}}
                                </h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <li class="li">
                                    <div class="demo-section k-content">
                                        <input name="files_image" id="files_image_{{$category}}" type="file"
                                               aria-label="files"/>
                                    </div>
                                </li>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>


            </div>

        </div>
    </div>

    <hr>



    <ul class="catImages catImages_{{$category}}">


        @if(!$user->partnerInfo->main_img)

        @endif




        @if (Auth::user()->type == 'admin')
            <li class="li"><a href="#" class="images-alt-button button">Edit alts</a></li>
        @endif

    </ul>


    @push('footer')
        <script>
            $(document).ready(function () {

                $("#main_image_{{$category}}").kendoUpload({
                    "multiple": false,
                    async: {
                        saveUrl: "{{auth()->user()->type == 'admin' ? '/cp/' : '/'}}service-images/upload-main/{{$user->id_partner . '/' . $category}}",
                        removeUrl: "remove",
                        autoUpload: false
                    },
                    validation: {
                        allowedExtensions: [".jpg", ".png", '.jpeg'],
                    }
                });

                $("#files_image_{{$category}}").kendoUpload({
                    validation: {
                        allowedExtensions: [".jpg", ".png", '.jpeg'],
                    },
                    multiple: true,
                    async: {
                        saveUrl: "{{auth()->user()->type == 'admin' ? '/cp/' : '/'}}service-images/upload/{{$user->id_partner . '/' . $category}}",
                        removeUrl: "remove",
                        autoUpload: false
                    },
                    success: onComplete,
                    complete: onSelect
                });

                function onSelect(e) {
                }

                function onComplete(e) {
                    window.location = window.location;
                }
            });
        </script>
    @endpush
        <?php $i++ ?>
@endforeach
