@extends('main')

@section('page')
    page="billing"
@endsection

@section('title')
    <title>Billing | {{ __('partybooker-cp.www')}}</title>
@endsection


@section('service')

    <script async
            src="https://js.stripe.com/v3/buy-button.js">
    </script>

    <stripe-buy-button
        buy-button-id="buy_btn_1O56GpFdJurpbLhhoMnv9g4v"
        publishable-key="pk_live_51O545DFdJurpbLhh1Zh1Zo6B6AbsAMZcaq57N0aOLFiZXVBFWsAxNbswXpCwd0ftmKLuuYGMgiWBdFrNM3Zasdb900hgVCuKqK"
    >
    </stripe-buy-button>

@endsection

@if(!auth()->user()->subscribed('main'))
    @push('header')
        <script src="https://js.stripe.com/v3/"></script>

        <script>
            const stripe = Stripe('{{ env("STRIPE_KEY") }}');
            console.log(stripe);

            const elements = stripe.elements();
            const cardElement = elements.create('card');

            cardElement.mount('#card-element');

            const cardHolderName = document.getElementById('name');
            const cardButton = document.getElementById('card-button');
            const clientSecret = cardButton.dataset.secret;
            let validCard = false;
            const cardError = document.getElementById('card-errors');

            cardElement.addEventListener('change', function (event) {

                if (event.error) {
                    validCard = false;
                    cardError.textContent = event.error.message;
                } else {
                    validCard = true;
                    cardError.textContent = '';
                }
            });

            var form = document.getElementById('signup-form');

            form.addEventListener('submit', async (e) => {
                event.preventDefault();

                const {paymentMethod, error} = await stripe.createPaymentMethod(
                    'card', cardElement, {
                        billing_details: {name: cardHolderName.value}
                    }
                );

                if (error) {
                    // Display "error.message" to the user...
                    console.log(error);
                } else {
                    // The card has been verified successfully...
                    var hiddenInput = document.createElement('input');
                    hiddenInput.setAttribute('type', 'hidden');
                    hiddenInput.setAttribute('name', 'payment_method');
                    hiddenInput.setAttribute('value', paymentMethod.id);
                    form.appendChild(hiddenInput);
                    // Submit the form
                    form.submit();
                }

            });

        </script>
    @endpush
@endif
