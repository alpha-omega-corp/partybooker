@php use App\Http\Middleware\LocaleMiddleware; @endphp
@extends('web.main')
@section('page')
    page="cp"
@endsection

@section('title')
    <title>CP | {{ __('partybooker-cp.www')}}</title>
@endsection

@section('content')
    <section id="service" class="location">
        <div id="map" class="abs"
             data-lat="{{$user->partnerInfo->lat}}"
             data-lon="{{$user->partnerInfo->lon}}"
             data-code="{{__('cantons.'.strtolower($user->partnerInfo->location_code).'_loc')}}"
             data-address="{{$user->partnerInfo->address}}"
             data-icon="{{$user->partnerInfo->category_1}}"
             data-name="{{app()->getLocale() == 'en' ? $user->partnerInfo->en_company_name : $user->partnerInfo->fr_company_name}}"
             data-cat="{{__('categories.'.$user->partnerInfo->category_1)}}"
             data-image="{{ asset('/storage/images/'.$user->partnerInfo->main_img)}}">
        </div>
    </section>
@endsection
