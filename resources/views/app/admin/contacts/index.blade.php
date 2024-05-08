@extends('main')

@section('title')
    <title>Partners | {{ __('partybooker-cp.www')}}</title>
@endsection

@section('content')

    <x-card.panel :title="__('admin.contacts')">


        <div class="contacts-card">
            <div class="card-list">
                <x-admin.contact title="Address" :value="$appContact->address"/>
                <x-admin.contact title="Email" :value="$appContact->email"/>
                <x-admin.contact title="Phone" :value="$appContact->phone"/>
                <x-admin.contact title="Facebook" :value="$appContact->facebook"/>
                <x-admin.contact title="Instagram" :value="$appContact->instagram"/>
                <x-admin.contact title="Linkedin" :value="$appContact->linkedin"/>
                <x-admin.contact title="Twitter" :value="$appContact->x"/>
            </div>
        </div>
    </x-card.panel>

@endsection

