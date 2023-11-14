@props([
    'icon',
    'modal' => null,
    'title',
])

<div class="advert-tabs">


    <div class="advert-tabs-header" x-data="{modal: '{{$modal}}'}" @click="openModalPrevent(modal)">
        <div class="advert-tabs-absolute">
            <div class="advert-tabs-edit">
                @if(isset($edit))
                    {{$edit}}
                @endif
            </div>
        </div>
        
        <div class="advert-tabs-icon">
            @svg($icon)
        </div>

        <h6 class="fw-bold text-start text-white m-0 text-uppercase d-flex align-items-center">
            {{$title}}
        </h6>
    </div>

    {{$slot}}

</div>

