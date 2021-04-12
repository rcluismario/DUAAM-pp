@extends('layout.layout')
@section('title')
Confirmación con banco
@endsection

@section('content')
<div class="container" style="margin-top: 100px; margin-bottom: 100px">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Complete los pasos de seguridad</div>

                <div class="card-body">
                    <p>Debe de seguir los pasos de seguridad proporcionados por su banco</p>
                </div>
            </div>
        </div>
    </div>
</div>

@section('custom-js')
<script src="https://js.stripe.com/v3/"></script>
<script>
    const stripe = Stripe('{{ config('services.stripe.key') }}');

        stripe.handleCardAction("{{ $clientSecret }}")
            .then(function (result) {
                if (result.error) {
                    window.location.replace("{{ route('cancelled') }}");
                } else {
                    window.location.replace("{{ route('approval') }}");
                }
            });
</script>
@endsection

@endsection