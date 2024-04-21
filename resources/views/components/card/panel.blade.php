@props([
    'title' => null,
])

<div {{$attributes->merge(['class' => 'app-card-panel'])}}>
    <div class="card-panel-header">
        @if($title)
            <x-app.title
                :size="TitleSize::LARGE"
                :color="AppColor::BLUE"
                :value="$title"
                :border="true"
                class="card-panel-title"
            />
        @endif

        @if(isset($information))
            <div class="card-panel-information">
                {{$information}}
            </div>
        @endif
    </div>

    @if(isset($breadcrumbs))
        <div class="card-panel-breadcrumbs">
            {{$breadcrumbs}}
        </div>
    @endif

    <section {{$attributes->merge(['class' => 'card-panel-body'])}}>
        {{$slot}}
    </section>
</div>
