@extends('layout.layout')
@section('title')
    Quiénes somos
@endsection
@section('custom-css')
@endsection

@section('main_div_header_class','jumbotron jumbotron-fluid cover-who py-0 mb-0')
@section('custom-header')
<div class="container">
    <div class="row justify-content-md-center">
        <div class="col-md-4 col-12">
            <div class="text-center">
                <img src="{{ asset('assets/img/white_tree.png') }}">
            </div>
        </div>
        <div class="col-md-4">
            <h3 class="text-white media-top-margin mb-3">Esta Campaña es innovación y está haciendo la diferencia</h3>
        </div>
    </div>
</div>
@endsection

@section('content')
<main>
<hr class="gray-hr mt-0 mb-5" />
<section class="section">
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6">
                <div class="media my-4">
                    <img src="{{ asset('assets/img/concept.png') }}" class="align-self-start mr-3" alt="concept" height="100px" />
                    <div class="media-body">
                        <h4 class="mt-0">Concepto</h4>
                        <p>Dona un árbol al mundo es una campaña de restauración ambiental y empoderamiento
                            social
                            que se suma a esfuerzos internacionales para frenar el cambio climático y ayudar a
                            comunidades con rezago social.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 my-4">
                <div class="media">
                    <img src="{{ asset('assets/img/mission.png') }}" class="align-self-start mr-3" alt="concept" height="100px" />
                    <div class="media-body">
                        <h4 class="mt-0">Misión</h4>
                        <p>Luchar contra el cambio climático apoyados por las comunidades y ofrecer a las
                            personas una forma fácil y eficiente de compensar su huella de carbono.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="media my-4">
                    <img src="{{ asset('assets/img/planet.png') }}" class="align-self-start mr-3" alt="concept" height="100px" />
                    <div class="media-body">
                        <h4 class="mt-0">Visión</h4>
                        <p>Ser la opción más accesible y reconocida en todo el mundo para compensar tu huella de carbono.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="media my-4">
                    <img src="{{ asset('assets/img/history.png') }}" class="align-self-start mr-3" alt="concept" height="100px" />
                    <div class="media-body">
                        <h4 class="mt-0">Antecedentes</h4>
                        <p>Se creó en México por iniciativa de <i>The Tree School</i>, una asociación civil
                            dedicada
                            a la educación para el desarrollo sostenible.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<blockquote>

</blockquote>

    </main>
@endsection


@section('custom-js')
    
@endsection