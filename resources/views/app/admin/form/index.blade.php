@php use App\Enums\FormType;use App\Models\AppForm; @endphp
@extends('main')

@section('title')
    <title>Partners | {{ __('partybooker-cp.www')}}</title>
@endsection

@section('content')
    <x-card.panel :title="__('admin.form')" :color="AppColor::PINK">

        <div class="admin-forms-container">
            @foreach(FormType::values() as $formType)
                <x-card :title="$formType" class="admin-form-card">
                    <ul class="form-card-content">
                        @foreach(AppForm::ofType(FormType::from($formType))->get() as $form)
                            <li class="card-content-item">
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
            @endforeach
        </div>
    </x-card.panel>
@endsection
