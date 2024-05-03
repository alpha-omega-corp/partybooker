@php use App\Enums\TitleSize; @endphp
@props([
    'title',
    'titleColor',
])
<div class="d-flex flex-column w-100">

    <x-card.panel {{$attributes->merge(['class' => 'app-main-listing'])}} :title="$title">


        <x-app.section class="app-listing-container">
            <!-- Filters -->
            <div class="app-listing-column">
                <div class="listing-column-content">
                    @if(isset($breadcrumbs))
                        <div class="card-panel-breadcrumbs">
                            {{$breadcrumbs}}
                        </div>
                    @endif

                    {{$left}}
                </div>
            </div>
            
            <!-- Listing -->
            <div class="app-listing-column">

                <div class="listing-column-content column-content-right">
                    @if(isset($information))
                        {{$information}}
                    @endif

                    <div class="listing-column-right">
                        {{$right}}
                    </div>
                </div>
            </div>
        </x-app.section>

    </x-card.panel>
</div>
