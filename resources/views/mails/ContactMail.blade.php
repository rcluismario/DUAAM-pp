@component('mail::message')
<p>
    {{ $name }} desea contactarnos!
    <br>
    Contactar al correo: {{ $email }}
    <br>
    Asunto: {{ $subj }}
    <br>
    Mensaje: {{ $msg ?? ''}}
    <br>
</p>
<br>
{{ config('app.name') }}
@endcomponent
