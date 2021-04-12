// A reference to Stripe.js initialized with your real test publishable API key.

// === !!!IMPORTANTE: ESCRIBIR LLAVE PRIVADA DE LA CUENTA A UTILIZAR = Stripe("aqui") ===
var stripe = Stripe("");
// The items the customer wants to buy

// Disable the button until we have Stripe set up on the page
function fireModal(){
    
}

// == FUNCIONES DE STRIPE. ENVIA LOS DATOS COMO 'METADATA' DENTRO DE LA TRANSACCIÓN ===

function gotoCheckout() {
    var fullName = document.getElementById('customerFullName').value
    var mail = document.getElementById('customerMail').value
    var country = document.getElementById('customerCountry').value
    var count = document.getElementById('tree').value
    if(fullName !="" && mail !="" && country != "NA" && count>0){
        $('#checkoutModal').modal('show')
        var treeNames = []
        for (let i = 0; i < count; i++) {
            var name = document.getElementById('treeName-' + i + '').value
            treeNames.push(name)
        }
        var data = {
            fullName,
            mail,
            country,
            count,
            treeNames
        }
        console.log(data)
        setTimeout(() => {
            initCheckout(data)
            // multiplica 60 * la cantidad de arbolitos que fueron seleccionados
            document.getElementById('payButton').innerHTML = '<span id="button-text">Donar $' + 60 * count + ' MXN</span>'
        }, 500);
    }
    else{
        console.log('Todos los campos son obligatorios');
        Swal.fire(
            'Advertencia',
            'Todos los campos son obligatorios.',
            'warning'
        )
    }
}

function initCheckout(data) {
    console.log('Processing:', data)
    var purchase = {
        items: [{
            name: data.fullName,
            email: data.mail,
            country: data.country,
            amount: data.count,
            trees: data.treeNames
            
        }]
    };
    
    //document.querySelector("button").disabled = true;
    fetch("/donaciones", {
        method: "POST",
        headers: {
            "Content-Type": "application/json"
        },
        body: JSON.stringify(purchase)
    })
        .then(function (result) {
            return result.json();
        })
        .then(function (data) {
            var elements = stripe.elements();
            var style = {
                base: {
                    color: "#000000",
                    fontFamily: 'Roboto, sans-serif',
                    fontSmoothing: "antialiased",
                    fontSize: "16px",
                    "::placeholder": {
                        color: "#000000"
                    }
                },
                invalid: {
                    fontFamily: 'Roboto, sans-serif',
                    color: "#FF0000",
                    iconColor: "#FF0000"
                }
            };
            var card = elements.create("card", { style: style });
            // Stripe injects an iframe into the DOM
            card.mount("#card-element");
            card.on("change", function (event) {
                // Disable the Pay button if there are no card details in the Element
                document.querySelector("button").disabled = event.empty;
                document.querySelector("#card-error").textContent = event.error ? event.error.message : "";
            });
            var form = document.getElementById("payment-form");
            form.addEventListener("submit", function (event) {
                event.preventDefault();
                // Complete payment when the submit button is clicked
                payWithCard(stripe, card, data.clientSecret);
            });
        });
    // Calls stripe.confirmCardPayment
    // If the card requires authentication Stripe shows a pop-up modal to
    // prompt the user to enter authentication details without leaving your page.
    var payWithCard = function (stripe, card, clientSecret) {
        loading(true);
        stripe
            .confirmCardPayment(clientSecret, {
                payment_method: {
                    card: card
                }
            })
            .then(function (result) {
                if (result.error) {
                    // Show error to your customer
                    showError(result.error.message);
                } else {
                    // The payment succeeded!
                    orderComplete(result.paymentIntent.id);
                }
            });
    };
}
/* ------- UI helpers ------- */
// Shows a success message when the payment is complete
var orderComplete = function (paymentIntentId) {
    loading(false);
    // document
    //     .querySelector(".result-message a")
    //     .setAttribute(
    //         "href",
    //         "https://dashboard.stripe.com/test/payments/" + paymentIntentId
    //     );
    // document.querySelector(".result-message").classList.remove("hidden");
    // document.querySelector("button").disabled = true;
    Swal.fire({
        title: 'Exito!',
        text: "Tu donación se realizó satisfactoriamente!",
        icon: 'success',
        confirmButtonColor: '#80a8d9',
    }).then((result) => {
        if (result.value) {
            window.location.replace('https://donaunarbolalmundo.org')
        }
    })
};
// Show the customer the error from Stripe if their card fails to charge
var showError = function (errorMsgText) {
    loading(false);
    var errorMsg = document.querySelector("#card-error");
    errorMsg.textContent = errorMsgText;
    setTimeout(function () {
        errorMsg.textContent = "";
    }, 4000);
};
// Show a spinner on payment submission
var loading = function (isLoading) {
    if (isLoading) {
        // Disable the button and show a spinner
        document.querySelector("button").disabled = true;
        document.querySelector("#spinner").classList.remove("hidden");
        document.querySelector("#button-text").classList.add("hidden");
    } else {
        document.querySelector("button").disabled = false;
        document.querySelector("#spinner").classList.add("hidden");
        document.querySelector("#button-text").classList.remove("hidden");
    }
};