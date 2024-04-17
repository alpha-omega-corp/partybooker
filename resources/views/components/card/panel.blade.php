@props(['title' => null])

<div {{$attributes->merge(['class' => 'app-card-panel'])}}>
    <div class="card-panel-header">
        @if($title)
            <x-app.title
                :size="TitleSize::LARGE"
                :color="AppColor::BLUE"
                :value="$title"
                class="card-panel-title"
            />
        @endif

        @if(isset($information))
            <div class="card-panel-information">
                {{$information}}
            </div>
        @endif
    </div>

    {{$slot}}
</div>
