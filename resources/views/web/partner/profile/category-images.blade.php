<?php use App\Models\Category;

$i = 1; ?>
@foreach($galleryImages as $category => $data)
    @php
        $images = count($data['images']);
        $allowed = $data['count'];
        $locale = app()->getLocale();
    @endphp

    <div class="row">
        <div class="gallery">
            <div class="gal-img gal-img-all">
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
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function () {
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
        <?php $i++ ?>
@endforeach


