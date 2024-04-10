@props(['title'])

<div class="app-card-listing">

    <div class="listing-header">
        <x-app.title
            :size="TitleSize::LARGE"
            :color="AppColor::BLUE"
            :value="$title"
            class="listing-title"
        />
        @if(isset($breadcrumbs))
            <div class="listing-breadcrumbs">{{$breadcrumbs}}</div>
        @endif
    </div>


</div>
