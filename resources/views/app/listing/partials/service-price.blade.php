<x-service
    :title="__('service.payment_methods')"
    :data="$price->payment_methods"/>

<x-service
    :title="__('service.price')"
    :data="$price->price_specs"
    :keys="['name', 'price']"/>

<x-service
    :title="__('service.deposit')"
    :data="$price->price_specs"
    :keys="['name', 'price']"/>

<x-service
    :title="__('service.delivery')"
    :data="$price->delivery_specs"
    :keys="['name', 'price']"/>

<x-service.checkmark
    :title="__('service.budget')"
    :data="$price->budget"/>

