@props(['title'])

<div {{$attributes->merge(['class' => 'app-card-panel'])}}>
    <div class="card-panel-header">
        <x-app.title
            :size="TitleSize::LARGE"
            :color="AppColor::BLUE"
            :value="$title"
        />

        @if(isset($information))
            <div class="card-panel-information">
                {{$information}}
            </div>
        @endif
    </div>

    {{$slot}}
</div>
