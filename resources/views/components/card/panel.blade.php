@props([
    'title' => null,
    'color' => AppColor::BLUE,
])

<div {{$attributes->merge(['class' => 'app-card-panel'])}}>
    <div class="card-panel-header">
        @if($title)
            <x-app.title
                :size="TitleSize::LARGE"
                :color="$color"
                :value="$title"
                :padding="false"
                :border="true"
                class="card-panel-title">
                @if(isset($breadcrumbs))
                    <div class="card-panel-breadcrumbs">
                        {{$breadcrumbs}}
                    </div>
                @endif
            </x-app.title>

        @endif
    </div>


    <div {{$attributes->merge(['class' => 'card-panel-body'])}}>
        {{$slot}}
    </div>
</div>
