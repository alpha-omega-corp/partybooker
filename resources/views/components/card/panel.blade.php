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
                :border="true"
                :background="true"
                class="card-panel-title"
            />
            @if(isset($breadcrumbs))
                <div class="card-panel-breadcrumbs">
                    {{$breadcrumbs}}
                </div>
            @endif
        @endif

        @if(isset($information))
            <div class="card-panel-information">
                {{$information}}
            </div>
        @endif
    </div>


    <section {{$attributes->merge(['class' => 'card-panel-body'])}}>
        {{$slot}}
    </section>
</div>
