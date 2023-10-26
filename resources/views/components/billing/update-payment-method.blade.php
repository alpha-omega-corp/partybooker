@props(['intent'])

<div class="container">
    <div class="d-flex justify-content-center">
        <div class="update-payment-container">
            <x-dashboard.input
                type="url"
                name="holder"
                id="card-holder-name"
                label="Card Holder Name"
                icon="heroicon-o-user"/>

            <hr>
            <div id="card-element"></div>
            <hr>
            <button id="card-button" type="button" data-secret="{{ $intent->client_secret }}">
                Update Payment Method
            </button>

            <form method="POST" action="{{route('payment-method')}}">
                <input type="hidden" id="payment-method" name="method" value="">
                @csrf
                <button type="submit" id="submit">
                    Submit
                </button>
            </form>
        </div>
    </div>
</div>


<script src="https://js.stripe.com/v3/"></script>

<script>
    const stripe = Stripe('{{ env("STRIPE_KEY") }}');

    const elements = stripe.elements();
    const cardElement = elements.create('card');

    cardElement.mount('#card-element');

    const cardHolderName = document.getElementById('card-holder-name');
    const cardButton = document.getElementById('card-button');
    const clientSecret = cardButton.dataset.secret;

    cardButton.addEventListener('click', async (e) => {
        const {setupIntent, error} = await stripe.confirmCardSetup(
            clientSecret, {
                payment_method: {
                    card: cardElement,
                    billing_details: {name: cardHolderName.value}
                }
            }
        );

        if (error) {
            console.log('hmmm')
        } else {
            const validIntent = setupIntent.payment_method;
            console.log(validIntent);
            document.getElementById('payment-method').value = validIntent;
            document.getElementById('submit').click();
        }
    });
</script>

