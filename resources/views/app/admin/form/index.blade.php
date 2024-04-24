@php use App\Enums\FormType;use App\Models\AppForm; @endphp
@extends('main')

@section('title')
    <title>Partners | {{ __('partybooker-cp.www')}}</title>
@endsection

@section('content')
    <x-card.panel :title="__('admin.form')">
        @foreach(FormType::values() as $formType)
            <div>
                <x-card :title="$formType" class="app-admin-form" :can-open="false">
                    <ul>
                        @foreach(AppForm::ofType(FormType::from($formType))->get() as $form)
                            <li>
                                <div class="d-flex justify-content-between">
                                    <p>{{$form->locale->label}}</p>
                                    <div>
                                        @include('app.admin.form.partials.edit', [
                                            'item' => $form,
                                        ])
                                        @include('app.admin.form.partials.delete', [
                                            'item' => $form,
                                        ])
                                    </div>
                                </div>
                            </li>
                        @endforeach
                    </ul>

                    @include('app.admin.form.partials.create', [
                    'formType' => $formType,
                    ])
                </x-card>
            </div>
        @endforeach
    </x-card.panel>
@endsection
