<label class="mt-3 mb-3">Detalles de tarjeta:</label>
<div id="cardElement"></div>
<small class="form-text text-muted" id="cardErrors" role="alert"></small>
<input type="hidden" name="payment_method" id="paymentMethod">

@push('scripts')
<script src="https://js.stripe.com/v3/"></script>
<script>
    const stripe = Stripe('{{ config('services.stripe.key') }}');
        const elements = stripe.elements({locale: 'es'});
        const cardElement = elements.create('card');
        cardElement.mount('#cardElement');
</script>

<script>
    const form = document.getElementById('paymentForm');
        const payButton =document.getElementById('payButton');

        payButton.addEventListener('click', async(e) => {
            if (form.elements.payment_platform.value === "stripe") {
                e.preventDefault();
                const { paymentMethod, error } = await stripe.createPaymentMethod('card',cardElement, {
                    billing_details: {
                        "name": document.getElementById('name_input').value,
                        "email": document.getElementById('email_input').value
                    }
                });

                if (error) {
                    const displayError = document.getElementById('cardErrors');

                    displayError.textContent = error.message;
                } else {
                    const tokenInput = document.getElementById('paymentMethod');
                    tokenInput.value = paymentMethod.id;
                    form.submit();
                }
            }
        });
</script>
@endpush