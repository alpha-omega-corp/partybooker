@php use App\Models\Advert; @endphp
@php use App\Http\Middleware\LocaleMiddleware; @endphp
<div class="tab" tab="main" style="display: block">
    @include('web.partner.notify')
    @if (Auth::user()->type == 'admin')
        <div class="admin">
            <h2>Administration:</h2>
            <div class="row">
                <div class="col-md-3">
                    <a href="#" data-toggle="modal" data-target="#exampleModal"
                       style="font-size: 13px; line-height: normal" class="button"
                       data-id="{{ $user->partnerInfo->id }}">{{ __('partybooker-cp.set_discount_amount') }}</a>
                </div>
                @if ($user->partnerInfo->currentPlan)
                    <div class="col-md-3">
                        <a href="#" data-toggle="modal" id="add-category-button" data-target="#add-category"
                           class="button"
                           data-id="{{ $user->partnerInfo->id }}">{{ __('partybooker-cp.add_sub_category') }}</a>
                    </div>
                @endif
            </div>


            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                 aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">{{ __('partybooker-cp.discount') }}</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form method="post" action="/cp/admin/set-discount">
                            <div class="modal-body">
                                @csrf
                                <input type="hidden" value="{{ $user->partnerInfo->id }}" name="partners_info_id">
                                <label>{{ __('partybooker-cp.discount_amount') }}</label>
                                <input name="discount" type="number" min="0" max="100"
                                       value="{{ $user->partnerInfo->discount }}">
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary"
                                        data-dismiss="modal">{{ __('partner.close') }}</button>
                                <button type="submit" style="font-size: 2vh"
                                        class="btn btn-primary">{{ __('partybooker-cp.set_discount_amount') }}</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="modal fade " id="add-category" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                 aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">{{ __('partybooker-cp.add_sub_category') }}
                            </h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form class="reset-this" method="post"
                              action="{{ url(LocaleMiddleware::getLocale() . '/cp/set-categories') }}">
                            <div class="modal-body">
                                @csrf
                                <input type="hidden" value="{{ $user->partnerInfo->id }}" name="partners_info_id">
                                <h4>Categories</h4>
                                <select multiple id="categories" name="categories[]"> </select>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary"
                                        data-dismiss="modal">{{ __('partner.close') }}</button>
                                <button type="submit" style="font-size: 2vh"
                                        class="btn btn-primary">{{ __('partybooker-cp.save') }}</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            @push('header')
                <link rel="stylesheet" href="{{ asset('/plugins/kendo/kendo.common.min.css') }}"/>
                <link rel="stylesheet" href="{{ asset('/plugins/kendo/kendo.default.min.css') }}"/>
                <style>
                    ul#categories_taglist li {
                        padding: 0 !important;
                    }
                </style>
            @endpush
            @push('footer')
                <script src="{{ asset('/plugins/kendo/kendo.all.min.js') }}"></script>
                <script src="{{ asset('/plugins/kendo/kendo.all.min.js') }}"></script>

                <script>
                    $(document).ready(function () {

                        $("#categories").kendoMultiSelect({
                            dataTextField: "name",
                            dataValueField: "id",
                            autoClose: false,
                            height: 400,
                            dataSource: {
                                transport: {
                                    read: "{{ url(LocaleMiddleware::getLocale() . '/cp/get-categories/') }}"
                                },
                                group: {
                                    field: "category"
                                }
                            }
                        });

                        var multiselect = $("#categories").data("kendoMultiSelect");
                        multiselect.value(JSON.parse("{{ $user->subCategoriesList }}"));

                        $('#add-category-button').on('click', function (e) {
                            var multiselect = $("#categories").data("kendoMultiSelect");
                            multiselect.value(JSON.parse("{{ $user->subCategoriesList }}"));
                        });

                    });
                </script>
            @endpush
        </div>
    @endif

    <x-dashboard.card :title="__('partner.status')">
        @include('web.partner.partials.dashboard.payment-status')
    </x-dashboard.card>

    <x-dashboard.card :title="__('partner.plan_up')">
        @include('web.partner.partials.dashboard.active-plan')
    </x-dashboard.card>

    <x-dashboard.card :title="__('partner.statistics_data')">
        @include('web.partner.partials.dashboard.statistics')
    </x-dashboard.card>

    <x-dashboard.card :title="__('partner.rating')">
        @include('web.partner.partials.dashboard.evaluation')
    </x-dashboard.card>

    <div class="card">
        @if ($user->partnerInfo->discount)
            <ul>
                <li><span>{{ __('partybooker-cp.discount') }}:</span>
                    {{ $user->partnerInfo->discount }} %
                </li>
            </ul>
        @endif
    </div>


    @if ($user->partnerInfo->vipPlan)
        <ul>
            <li><span>{{ __('partner.plan_up') }}:</span>
                VIP
            </li>
            <li><span>{{ __('partner.payment') }}: </span>
                @if (
                    !$user->partnerInfo->vipPlan->is_payed ||
                        ($user->partnerInfo->vipPlan->end_date && date('Y-m-d') > $user->partnerInfo->vipPlan->end_date))
                    N/A
                @else
                    {{ __('partner.paid_on') }} {{ $user->partnerInfo->vipPlan->start_date }}
                @endif
            </li>
            <li><span>{{ __('partner.expire') }}: </span>
                {{ $user->partnerInfo->vipPlan->end_date ?? 'N/A' }}
            </li>

            @if (
                !$user->partnerInfo->vipPlan->is_payed ||
                    ($user->partnerInfo->vipPlan->end_date && date('Y-m-d') > $user->partnerInfo->vipPlan->end_date))
                <li class="topay"><a href="#plan" class="button">{{ __('partner.make_payment') }}</a></li>
            @endif
        </ul>
    @endif
</div>
