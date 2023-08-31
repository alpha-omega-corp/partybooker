<?php $i = 1;?>
@foreach($categoryImages as $category => $data)
    <ul class="catImages_{{$category}}">
        <li block="catImages_{{$category}}"><h4>Service detail images</h4></li>
        <li class="li">{{__('partner.you_uploaded')}} <div class="imgNumber" data-max="{{$data['count'] - 1}}">{{count($data['images'])}}</div> of {{$data['count']}} {{__('partner.image_s')}}</li>
        <li class="li">
            <label>{{__('partner.upload_main_image')}}:</label>
            <div class="demo-section k-content">
                <input name="main_image" id="main_image_{{$category}}" type="file" aria-label="files" />
            </div>
        </li>
        <li class="li">
            <label>{{__('partner.upload_images')}}:</label>
            <div class="demo-section k-content">
                <input name="files_image" id="files_image_{{$category}}" type="file" aria-label="files" />
            </div>
        </li>
        @if (Auth::user()->type == 'admin')
        <li class="li"><a href="#" class="images-alt-button button">Edit alts</a></li>
        @endif
    </ul>
    <div class="row mt-30 justify-content-center">
        <div class="col-12 gallery justify-content-center">
            <?php $locale = app()->getLocale();?>
            @foreach($data['images'] as $img)
                <div class="gal-img">
                    <img src="{{ asset('storage/images/'.$img['image_name'])}}" alt="{{$img['image_alt_'.$locale]}}" data-imageId="{{$img['id']}}"/>
                    @if(!$img['is_main'])
                        <div class="del" data-img="{{$img['image_name']}}" data-image-id="{{$img['id']}}" data-id="{{$user->id_partner}}">x</div>
                    @endif
                </div>
            @endforeach
        </div>
    </div>

    @push('footer')
        <script>
            $(document).ready(function() {
                $("#main_image_{{$category}}").kendoUpload({
                    "multiple": false,
                    async: {
                        saveUrl:  "{{auth()->user()->type == 'admin' ? '/cp/' : '/'}}service-images/upload-main/{{$user->id_partner . '/' . $category}}",
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
    <?php $i++?>
@endforeach
