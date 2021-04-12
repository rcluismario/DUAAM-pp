@extends('layout.layout')
@section('title')
Donación completa
@endsection
@section('custom-css')
<style>
    .barra {
        height: 100px;
        background-color: #a0c539;
        margin-bottom: 0;
    }

    .titulo {
        width: 100%;
        margin-top: 0px;
        margin-bottom: 0px;
        font-family: Poppins, sans-serif;
        font-size: 42px;
        line-height: 60px;
        text-align: center;
    }

    .texto-secundario {
        width: 100%;
        margin-top: 20px;
        margin-bottom: 20px;
        margin-left: 0px;
        padding-right: 100px;
        padding-left: 70px;
        font-family: Poppins, sans-serif;
        font-size: 18px;
        line-height: 32px;
        font-weight: 600;
        text-align: center;
    }

    .container-center {
        padding-top: 0px;
        padding-bottom: 130px;
        text-align: center;
    }

    .green-button {
        margin-top: 20px;
        margin-left: -15px;
        padding-top: 18px;
        padding-right: 40px;
        padding-bottom: 18px;
        background-color: #a6d328;
        box-shadow: 5px 9px 12px rgba(166, 181, 208, 0.9);
        border-radius: 20px;
    }
</style>
@endsection


@section('content')

<section class="container">
    <div class="row">
        <div class="col-lg-12 container-center">
            <img src="{{ asset('web_assets/images/Capa 3.png') }}" loading="lazy"
                sizes="(max-width: 479px) 100vw, (max-width: 767px) 75vw, (max-width: 991px) 330px, 480px" alt="">
            <h1 class="titulo">¡Gracias!</h1>
            <h1 class="titulo">Estás ayudando a salvar el planeta</h1>
            <h1 class="texto-secundario"><strong>Tu aportación suma a los esfuerzos de la comunidad por restablecer el
                    equilibrio
                    climático en nuestro mundo. ¡Gracias! Adicionalmente enviamos información a tu correo
                    electrónico.</strong></h1>
            <a href="{{ route('home') }}" class="nav boxshadow w-inline-block">
                <div class="text-block-68-copy1214 noshadow">Volver al inicio</div>
                <img src="{{ asset('web_assets/images/Icon-simple-gumtree.png') }}" loading="lazy" alt="" class="image">
            </a>
        </div>
    </div>
</section>

<hr class="barra">

@endsection


@section('custom-js')

@endsection