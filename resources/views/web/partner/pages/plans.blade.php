@php use App\Http\Middleware\LocaleMiddleware; @endphp
@extends('web.main')
@section('page')
    page="cp"
@endsection

@section('title')
    <title>CP | {{ __('partybooker-cp.www')}}</title>
@endsection

@section('content')
    <div class="row">
        @foreach($plans as $plan)
            <div class="col-md-3">
                <div class="become-partner">
                    <div class="packages">
                        <x-partner.package :plan="$plan"/>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
