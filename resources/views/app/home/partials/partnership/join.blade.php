@php use App\Enums\PaymentType; @endphp
<x-modal.index
    :name="ModalName::GUEST_PARTNERSHIP"
    :type="ModalType::CREATE"
    :size="ModalSize::MD"
    :custom-color="AppColor::SECONDARY"
    :title="__('form.join_title')"
    :action="false"
    :validation="true"
    :singleton="true"
    :hidden="true"
    :icon="$checkIcon"
    :route="route('guest.home.join')"
>

    <x-slot:body>
        <x-forms.select name="plan" :label="__('app.plan')">
            @svg($boxIcon)

            <x-slot:options>
                @foreach($plans as $plan)
                    <option value="{{$plan->id}}">
                        {{ucfirst($plan->locale->name)}}
                    </option>
                @endforeach
            </x-slot:options>
        </x-forms.select>

        <x-forms.input
            name="email"
            :label="__('form.email')"
            type="email"
        >
            @svg($emailIcon)
        </x-forms.input>

        <x-forms.input
            name="phone"
            :label="__('form.phone')"
        >
            @svg($phoneIcon)
        </x-forms.input>

        <x-forms.textarea
            name="message"
            :label="__('form.message')"
        />
    </x-slot:body>


</x-modal.index>
