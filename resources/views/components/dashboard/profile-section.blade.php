@props([
    'icon',
    'modal' => null,
])

<div class="profile-section ">
    <div class="bg-accent d-flex option-active-header" x-data="{modal: '{{$modal}}'}" @click="openModalPrevent(modal)">
        <div class="d-flex justify-content-center align-items-center text-white position-relative">
            @svg($icon, 'plan-active-icon')
            <div class="edit-category">
                @if(isset($edit))
                    {{$edit}}
                @endif
            </div>
        </div>

        <h6 class="fw-bold text-start text-white p-3 m-0 text-uppercase ">
            {{$title}}
        </h6>
    </div>

    <div>
        {{$slot}}
    </div>
</div>
