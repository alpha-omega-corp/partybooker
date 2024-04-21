@php use App\Enums\TitleSize; @endphp
@props([
    'title',
    'titleColor',
])
<div class="d-flex flex-column w-100">

    <x-card.panel {{$attributes->merge(['class' => 'app-main-listing'])}} :title="$title">
        <div class="app-listing-container">
            <div class="row">
                <!-- Filters -->
                <div class="col-xl-4 col-lg-12 app-listing-column">
                    <div class="listing-column-content">
                        <div class="card-panel-breadcrumbs">
                            {{$breadcrumbs}}
                        </div>

                        {{$left}}
                    </div>
                </div>

                <!-- Listing -->
                <div class="col-xl-8 col-lg-12 app-listing-column">

                    <div class="listing-column-content column-content-right">
                        @if(isset($information))
                            {{$information}}
                        @endif

                        <div class="listing-column-right">
                            {{$right}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </x-card.panel>
</div>
