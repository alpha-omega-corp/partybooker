@php use App\Http\Middleware\LocaleMiddleware; @endphp
@extends('main')

@section('title')
    <title>Partners | {{ __('partybooker-cp.www')}}</title>
@endsection

@section('content')

    <div x-data="partnerSearch()">

        <label for="search">
            {{__('partner.search')}}
        </label>

        <input x-model="input" id="search" type="text" placeholder="Search"/>

        <template x-for="partner in partners">
            <span x-text="partner.company_name"></span>
        </template>
    </div>

@endsection
