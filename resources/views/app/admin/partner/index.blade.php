@php use App\Models\Company; @endphp
@extends('main')

@section('title')
    <title>Partners | {{ __('partybooker-cp.www')}}</title>
@endsection


@section('content')
    <x-card.panel :title="__('admin.partners')" class="admin-listing">

        <div x-data="partners">

            <!-- Create Partner -->
            @include('app.admin.partner.partials.create')
            @include('app.admin.partner.partials.tops')

            <div class="admin-listing-container">
                @include('app.admin.partner.partials.filters')

                <div class="admin-listing-content">
                    <template x-for="item in filteredPartners()">
                        <div class="admin-listing-item shadow-lg">
                            <div class="listing-item-header">
                                <div class="d-flex justify-content-between pb-2">
                                    <h5 x-text="item.company" class="fw-bold"></h5>
                                    <div>
                                        <span x-text="item.plan"
                                              x-bind:class="'badge text-white text-bg-' + item.plan"></span>
                                    </div>
                                </div>

                                <small x-text="item.id"></small>
                            </div>

                            <x-app.action>
                                <a :href="item.url" class="btn btn-orange text-white d-flex align-items-center gap-2">
                                    @svg('heroicon-o-arrow-up-right')
                                    <span>View</span>
                                </a>

                                <a @click="remove(item)" class="btn btn-danger d-flex align-items-center gap-2">
                                    @svg('heroicon-o-trash')
                                    <span>Delete</span>
                                </a>
                            </x-app.action>


                            <div class="listing-item-content">

                                <x-card title="Adverts" :can-open="false">
                                    <x-slot:body>
                                        <ul>
                                            <template x-for="category in item.categories">
                                                <li>
                                                    <p x-text="category"></p>
                                                </li>
                                            </template>
                                        </ul>
                                    </x-slot:body>
                                </x-card>

                                <x-card title="Billing">
                                    <x-slot:body>
                                        <p x-text="item.paymentType"></p>
                                        <p x-text="item.paymentStart"></p>
                                        <p x-text="item.paymentEnd"></p>
                                    </x-slot:body>
                                </x-card>

                                <x-card title="Company">
                                    <x-slot:body>
                                        <p x-text="item.company"></p>
                                        <p x-text="item.address"></p>
                                    </x-slot:body>
                                </x-card>

                                <x-card title="User">
                                    <x-slot:body>
                                        <p x-text="item.name"></p>
                                        <p x-text="item.email"></p>
                                    </x-slot:body>
                                </x-card>
                            </div>

                            <div class="listing-item-date">
                                <small>Created <span x-text="item.created"></span></small>
                            </div>
                        </div>

                    </template>
                </div>
            </div>
        </div>

    </x-card.panel>
@endsection
