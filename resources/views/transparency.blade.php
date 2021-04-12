@extends('layout.layout')
@section('title')
    Transparencia
@endsection
@section('custom-css')
@endsection

@section('main_div_header_class','jumbotron jumbotron-fluid cover-transparencia py-0 mb-0')
@section('content')
<main>
        <section class="section">
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-6">
                
                <a href="../assets/informes/informe-julio-diciembre-2019.pdf" class="link-black">
                    <img class="d-inline" src="{{ asset('assets/img/pdf_icon.png') }}" alt="" width="100px" />
                    <h5 class="d-inline"><b>Informe Julio - Diciembre 2019</b></h5>
                </a>
                
            </div>
            <div class="col-md-6 mt-4">
            <h4 class="text-blue">
                    Nuestros informes
                </h4>
            <div class="text-justify">
                <p class="lead font-weight-light">
                Son muchas las acciones que estamos llevando a cabo para cumplir nuestra misión. En este apartado
                encontrarás los informes semestrales rendidos por la dirección de la campaña.
                </p>
            </div>
            </div>
        </div>
    </div>
</section>
</main>
@endsection


@section('custom-js')
    
@endsection