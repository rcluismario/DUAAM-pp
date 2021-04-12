@extends('layout.layout')
@section('title')
Contacto
@endsection
@section('custom-css')
@endsection

@section('main_div_header_class','jumbotron jumbotron-fluid cover-contacto py-0 mb-0')

@section('content')
<div class="container section">
    <div class="row">
        <div class="col-md-4">
            <div class="mt-5 medium-right">
                <h5>Tel: +52 (222) 838 36 91</h5>
                <p>contacto@donaunarbolalmundo.org</p>
            </div>
        </div>
        <div class="col-md-8">
            <div class="mt-5 ml-md-4">
                <h4>Contáctanos</h4>
                <form class="mt-2" method="POST" action="{{ route('sendmail') }}">
                    @csrf
                    <div class="form-group">
                        <input required type="text" name="Name" class="form-control" placeholder="Nombre" />
                    </div>
                    <div class="form-group">
                        <input required type="email" name="Email" class="form-control"
                            placeholder="Correo Electrónico" />
                    </div>
                    <div class="form-group">
                        <input required type="text" name="Asunto" class="form-control" placeholder="Asunto" />
                    </div>
                    <div class="form-group">
                        <textarea required class="form-control" name="Mensaje" placeholder="Mensaje"
                            rows="4"></textarea>
                    </div>
                    <div class="form-group">
                        {!! NoCaptcha::renderJs() !!}
                        {!! NoCaptcha::display() !!}
                    </div>
                    <div class="text-center mb-3">
                        <button class="btn btn-dona">Enviar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection


@section('custom-js')

@endsection