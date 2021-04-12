@component('mail::message')


# ¡Muchas gracias por su donación!

### Folio de donación: {{ $folio }}

### Total: ${{ $total }} MXN

Guarde su folio de donación en caso de haber donado árboles para obtener las fotos de ellos en la página oficial

Gracias,<br>
{{ config('app.name') }}
@endcomponent