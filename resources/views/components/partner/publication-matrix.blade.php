@props([
    'partner',
    'matrix'
])

@php($canPublish = [])
@foreach($matrix as $key => $value)
    @php($canPublish[] = $value)
@endforeach

<div class="card">
    <div class="d-flex">
        <div class="matrix-card">
            <h2 class="text-uppercase fw-bold fs-5 mt-3">
                {{__('partner.matrix')}}
            </h2>
            <hr>
            <div class="d-flex flex-column">

                @if(!$matrix['chooseThumbnail'])
                    <x-dashboard.card-info :targets="[
                        'editMainImageModel-button',
                    ]">
                        {{__('partner.choose_thumbnail')}}
                    </x-dashboard.card-info>
                @else
                    <div class="publish-matrix-check">
                        <div>
                            @svg('heroicon-o-check-circle')
                        </div>
                        <div class="matrix-check-content">
                            <span>{{__('partner.matrix_thumbnail_good')}}</span>
                        </div>
                    </div>
                @endif


                @if(!$matrix['chooseCategory'])
                    <x-dashboard.card-info :targets="[
                        'tab-1-2',
                        'editCategory-button',
                    ]">
                        {{__('partner.choose_category')}}
                    </x-dashboard.card-info>
                @else
                    <div class="publish-matrix-check">
                        <div>
                            @svg('heroicon-o-check-circle')
                        </div>
                        <div class="matrix-check-content">
                            <span>{{__('partner.matrix_category_good')}}</span>
                        </div>
                    </div>
                @endif

                @if(!$matrix['serviceDetails'])
                    <x-dashboard.card-info :targets="[
                        'tab-1-2',
                        'create0'
                    ]">
                        {{__('partner.fill_service_details')}}
                    </x-dashboard.card-info>
                @else
                    <div class="publish-matrix-check">
                        <div>
                            @svg('heroicon-o-check-circle')
                        </div>
                        <div class="matrix-check-content">
                            <span>{{__('partner.matrix_service_good')}}</span>
                        </div>
                    </div>
                @endif
                @if(!$matrix['companyDetails'])
                    <x-dashboard.card-info :targets="[
                        'tab-1-3',
                        'editCompanyDescription-button',
                    ]">
                        {{__('partner.fill_company_details')}}
                    </x-dashboard.card-info>
                @else
                    <div class="publish-matrix-check">
                        <div>
                            @svg('heroicon-o-check-circle')
                        </div>
                        <div class="matrix-check-content">
                            <span>{{__('partner.matrix_company_good')}}</span>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>

