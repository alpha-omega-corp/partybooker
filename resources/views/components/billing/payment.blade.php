@props([
    'intent',
    'plan',
    'update' => false,
])

<div class="container">
    <div class="d-flex justify-content-center">
        <div class="update-payment-container">
            <div class="mt-2">
                <x-dashboard.input
                    type="url"
                    name="holder"
                    id="card-holder-name"
                    placeholder="Name on card"
                    icon="heroicon-o-user-circle"/>

                <div id="card-element" class="p-2 m-2"></div>

                @if($update)
                    <button id="card-button" class="btn btn-primary w-100" type="button"
                            data-secret="{{ $intent->client_secret }}">
                        Mettre à jour
                    </button>

                    <form method="POST" action="{{route('payment.update')}}">
                        <input type="hidden" id="payment-method" name="method">
                        @csrf
                        <button type="submit" class="d-none" id="submit">
                            Submit
                        </button>
                    </form>
                @else
                    <button id="card-button" class="btn btn-primary w-100" type="button"
                            data-secret="{{ $intent->client_secret }}">
                        Subscribe
                    </button>

                    <form method="POST" action="{{route('subscription.start')}}">
                        <input type="hidden" id="payment-method" name="method">
                        <input type="hidden" id="plan" name="plan">
                        <input type="hidden" id="plan-name" name="name">
                        @csrf
                        <button type="submit" class="d-none" id="submit">
                            Submit
                        </button>
                    </form>
                @endif
            </div>
        </div>
    </div>
</div>

