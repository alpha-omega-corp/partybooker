@php use App\Models\Company; @endphp
@extends('main')

@section('title')
    <title>Partners | {{ __('partybooker-cp.www')}}</title>
@endsection

@section('content')
    <x-card.panel :title="__('admin.partners')" :color="AppColor::PINK" class="admin-listing">
        <div x-data="partners">

            <x-app.section>
                <div class="admin-listing-container">
                    @include('app.admin.partner.partials.filters')

                    <div class="admin-listing-content">
                        <template x-for="item in filteredPartners()">
                            <div class="admin-listing-item shadow-lg">
                                <h5 x-text="item.company" class="fw-bold text-center p-4"></h5>
                                <div class="listing-item-header">
                                    <small>Created <span x-text="item.created"></span></small>
                                    <span x-text="item.plan"
                                          x-bind:class="'badge text-white text-bg-' + item.plan"></span>
                                </div>

                                <x-app.action>
                                    <a :href="item.url"
                                       class="btn btn-orange text-white d-flex align-items-center gap-2">
                                        @svg('heroicon-o-arrow-up-right')
                                        <span>View</span>
                                    </a>

                                    <a x-data="openModal('{{ ModalName::PARTNER->name }}', '{{ModalType::DELETE}}', item.id)"
                                       @click="open()"
                                       class="btn btn-danger d-flex align-items-center gap-2">
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

                                <div class="listing-item-id">
                                    <small x-text="item.id"></small>
                                </div>
                            </div>
                        </template>
                    </div>
                </div>

            </x-app.section>
        </div>
    </x-card.panel>

    @foreach($partnerIds as $ajaxPartnerId)
        @include('app.admin.partner.partials.delete', ['ajaxPartnerId' => $ajaxPartnerId])
    @endforeach

@endsection

