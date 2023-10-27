@props([
    'intent',
    'plan',
])

<div class="container">
    <div class="d-flex justify-content-center">
        <div class="update-payment-container">
            <x-dashboard.input-card>
                <div class="mt-3">
                    <x-dashboard.input
                        type="url"
                        name="holder"
                        id="card-holder-name"
                        placeholder="Name on card"
                        icon="heroicon-o-user"/>
                </div>
            </x-dashboard.input-card>

            <div class="mt-2">
                <x-dashboard.input-card>
                    <br>
                    <div class="p-2 pt-3 pb-5">
                        <div id="card-element"></div>
                    </div>
                    <button id="card-button" class="btn btn-primary w-100" type="button"
                            data-secret="{{ $intent->client_secret }}">
                        Subscribe
                    </button>

                    <form method="POST" action="{{route('payment-method')}}">
                        <input type="hidden" id="payment-method" name="method" value="">
                        <input type="hidden" id="plan" name="plan">
                        <input type="hidden" id="plan-name" name="name">
                        @csrf
                        <button type="submit" class="d-none" id="submit">
                            Submit
                        </button>
                    </form>

                </x-dashboard.input-card>
            </div>

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

