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
    <div class="status">
        <h2>{{ __('partner.status') }}</h2>
        <div class="public">
            @if ($user->partnerInfo->payment_status != 1)
                <span>{{ __('partner.not_published') }}</span>
                <a href="#" class="button disabled">{{ __('partner.publish') }}</a>
            @else
                @if ($user->partnerInfo->public == 0)
                    <span>{{ __('partner.not_published') }}</span>
                    @if (in_array($user->partnerInfo->plan, ['basic', 'commission']))
                        <a href="#" class="button"
                           data-id="{{ $user->partnerInfo->id_partner }}">{{ __('partner.publish') }}</a>
                    @elseif ($user->partnerInfo->services()->where('status', Advert::STATUS_DRAFT)->first())
                        <a href="#" class="button disabled">{{ __('partner.publish') }}</a>
                    @elseif (is_null($user->partnerInfo->main_img))
                        <a href="#" class="button disabled">{{ __('partner.publish') }}</a>
                    @else
                        <a href="#" class="button"
                           data-id="{{ $user->partnerInfo->id_partner }}">{{ __('partner.publish') }}</a>
                    @endif
                @else
                    <span>{{ __('partner.published') }}</span>
                    <a href="#" class="button"
                       data-id="{{ $user->partnerInfo->id_partner }}">{{ __('partner.draft') }}</a>
                @endif
            @endif
        </div>


        @if ($user->partnerInfo->discount)
            <ul>
                <li><span>{{ __('partybooker-cp.discount') }}:</span>
                    {{ $user->partnerInfo->discount }} %
                </li>
            </ul>
        @endif


        <ul>

            <li><span>{{ __('partner.plan_up') }}: </span>
                @if (is_null($user->partnerInfo->plan))
                    N/A
                @else
                    @if (Lang::has('plan.' . strtolower($user->partnerInfo->plan)))
                        {{ strtoupper(trans('plan.' . $user->partnerInfo->plan)) }}
                    @else
                        {{ strtoupper($user->partnerInfo->plan) }}
                    @endif
                @endif
            </li>
            <li><span>{{ __('partner.payment') }}: </span>
                @if ($user->partnerInfo->payment_status == 0)
                    N/A
                @else
                    {{ __('partner.paid_on') }} {{ $user->partnerInfo->payed }}
                @endif
            </li>
            <li><span>{{ __('partner.expire') }}: </span>
                @if (is_null($user->partnerInfo->expiration_date))
                    N/A
                @else
                    {{ $user->partnerInfo->expiration_date }}
                @endif
            </li>

            @if ($user->partnerInfo->payment_status == 0)
                <li class="topay"><a
                        href="{{ url(LocaleMiddleware::getLocale() . (Auth::user()->type == 'admin' ? '/cp' : '') . '/partner-cp/' . $user->id_partner . '/plans') }}"
                        class="button">{{ __('partner.make_payment') }}</a></li>
            @endif

        </ul>
        <br/>
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
    <div class="statistics">
        <h2>{{ __('partner.statistics_data') }}</h2>
        <ul>
            <li><span>{{ __('partner.views') }}: </span>{{ $user->partnerInfo->statistic->view ?? 0 }}</li>
            <li><span>{{ __('partner.phone_clicks') }}: </span>{{ $user->partnerInfo->statistic->phone ?? 0 }}</li>
            <li><span>{{ __('partner.email_clicks') }}: </span>{{ $user->partnerInfo->statistic->email ?? 0 }}</li>
            <li><span>{{ __('partner.website_clicks') }}: </span>{{ $user->partnerInfo->statistic->website ?? 0 }}
            </li>
            <li><span>{{ __('partner.address_clicks') }}: </span>{{ $user->partnerInfo->statistic->address ?? 0 }}
            </li>
            <li><span>{{ __('partner.direct_requests') }}: </span>{{ $user->partnerInfo->statistic->direct ?? 0 }}
            </li>
            <?php $networks = ['Facebook', 'Twitter', 'Instagram', 'Linkedin', 'Vimeo', 'Youtube']; ?>
            @foreach ($networks as $network)
                    <?php $lc = strtolower($network); ?>
                <li><span>{{ $network }}: </span>{{ $user->partnerInfo->statistic->$lc ?? 0 }}</li>
            @endforeach
        </ul>
    </div>
    <div class="rating-stat">
        <h2>{{ __('partner.rating') }}</h2>
        <ul class="stars">
            @for ($i = 1; $i <= 5; $i++)
                @if ($user->partnerInfo->average_rate >= $i)
                    @include('common.star-selected')
                @else
                    @include('common.star')
                @endif
            @endfor
            <li class="pointed">{{ __('partner.based_on') }} {{ $user->partnerInfo->votes }}
                {{ __('partner.rates') }}</li>
        </ul>

        <div class="rated">
            @for ($i = 5; $i > 0; $i--)
                <ul class="stars">
                    @for ($j = 1; $j <= $i; $j++)
                        @include('web.common.star')
                    @endfor
                    <li class="pointed">
                        {{ isset($user->partnerInfo->rateGroup[$i]) ? $user->partnerInfo->rateGroup[$i] : 0 }}
                        {{ __('partner.rates') }}</li>
                </ul>
            @endfor
        </div>
    </div>
</div>
