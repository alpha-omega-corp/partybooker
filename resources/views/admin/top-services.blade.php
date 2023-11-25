@extends('admin.admin')

@section('page')
    page="topservices"
@endsection

@section('title')
    <title>{{ __('partybooker-cp.listing')}} | {{ __('partybooker-cp.www')}}</title>
@endsection

@push('head')

    <script>
        function topServiceHandler() {
            return {
                multiple: true,
                value: [],
                options: [],
                loadPartners(partners, values) {
                    JSON.parse(partners).forEach((partner) => {
                        this.options.push({
                            value: partner.value,
                            label: partner.label,
                        });
                    })
                    JSON.parse(values).forEach((value) => {
                        this.value.push(value);
                    })

                    this.init()
                },
                init() {
                    let bootSelect2 = () => {
                        let selections = this.multiple ? this.value : [this.value]

                        $(this.$refs.select).select2({
                            multiple: this.multiple,
                            data: this.options.map(i => ({
                                id: i.value,
                                text: i.label,
                                selected: selections.map(i => String(i)).includes(String(i.value)),
                            })),
                        })
                    }

                    let refreshSelect2 = () => {
                        $(this.$refs.select).select2('destroy')
                        this.$refs.select.innerHTML = ''
                        bootSelect2()
                    }

                    bootSelect2()

                    $(this.$refs.select).on('change', () => {
                        let currentSelection = $(this.$refs.select).select2('data')

                        this.value = this.multiple
                            ? currentSelection.map(i => i.id)
                            : currentSelection[0].id
                    })

                    this.$watch('value', () => refreshSelect2())
                    this.$watch('options', () => refreshSelect2())
                },
            }
        }
    </script>
@endpush
@section('content')
    <div class="container mt-5">
        <div x-data="topServiceHandler()"
             x-init="loadPartners('{{json_encode($partners)}}', '{{json_encode($topServicesId)}}')"
             class="max-w-sm w-full">
            <form method="POST" action="{{route('top-service.update')}}">
                @csrf
                <select x-ref="select" name="top[]" class="w-full"></select>

                <button type="submit">
                    {{__('partner.save')}}
                </button>
            </form>
        </div>

        <hr>
        <ul>
            @foreach($topServices as $key => $item)
                <li>
                    {{$key}} {{$item->partner()->first()->fr_company_name}}
                </li>
            @endforeach
        </ul>
    </div>
@endsection

