@extends('layout.layout')
@section('title')
    Nuestro equipo
@endsection
@section('custom-css')
@endsection


@section('content')
<main>
        <div>
<section class="section">
        <div class="row">
            <div class="col-md-6">
                <div class="container">
                    <div class="text-right mx-5 mt-5">
                        <h4 class="font-weight-roman">
                            Aquel que tiene un porqué para vivir se puede enfrentar a todos los "cómos".
                        </h4>
                        <div class="mt-1">
                            <img src="{{ asset('assets/img/nietzsche.png') }}" width="70%" class="img-fluid" />
                        </div>
                        <p class="lead text-muted">Friedrich Nietzsche</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="text-center mt-5">
                    <div class="mx-5 text-muted">
                        <p class="text-justify">Nuestro equipo está construido por mujeres y hombres que los define su amor por la vida y su compromiso de entregar a las futuras generaciones un planeta sano y en equilibrio.</p>
                        <p class="text-justify">
                            Además de nuestro equipo, podemos decir con orgullo que tenemos voluntarios y colaboradores, que nos impulsan a seguir adelante y hacen la diferencia día con día. Son personas que piensan que trabajar por la mejora del mundo no es tiempo perdido, por el contrario, creen que es una forma de corresponder al planeta por todo lo que nos ha dado. Algunos de ellos entregan su trabajo otros su generosidad al hacer una donación, pero todos contribuyen para que podamos afrontar los “cómos”.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="card box-shadow my-4">
                        <img class="card-img-top" src="{{ asset('assets/img/paul_equipo.jpg') }}" alt="Team image" />
                        <div class="card-body text-center">
                            <h5 class="card-title">Paúl Burgos Navarrete</h5>
                            <p class="card-text">Director General</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card box-shadow my-4">
                        <img class="card-img-top" src="{{ asset('assets/img/mariana_equipo.jpg') }}" alt="Team image" />
                        <div class="card-body text-center">
                            <h5 class="card-title">Mariana Segura Spota</h5>
                            <p class="card-text">Directora México</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card box-shadow my-4">
                        <img class="card-img-top" src="{{ asset('assets/img/roy_equipo1.jpg') }}" alt="Team image" />
                        <div class="card-body text-center">
                            <h5 class="card-title">Roy Phelan</h5>
                            <p class="card-text">Director Estados Unidos</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="container">
            <div class="row">
            <div class="col-md-4">
                    <div class="card box-shadow my-4">
                        <img class="card-img-top" src="{{ asset('assets/img/juliana_equipo.jpg') }}" alt="Team image" />
                        <div class="card-body text-center">
                            <h5 class="card-title">Juliana Acosta Jaramillo</h5>
                            <p class="card-text">Directora Colombia</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card box-shadow my-4">
                        <img class="card-img-top" src="{{ asset('assets/img/emmanuel_equipo.jpg') }}" alt="Team image" />
                        <div class="card-body text-center">
                            <h5 class="card-title">Emmanuel Bolaños Bautista</h5>
                            <p class="card-text">Director Operaciones Forestales</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card box-shadow my-4">
                        <img class="card-img-top" src="{{ asset('assets/img/fernando_equipo.jpg') }}" alt="Team image" />
                        <div class="card-body text-center">
                            <h5 class="card-title">Fernando Herrera Hernández</h5>
                            <p class="card-text">Contabilidad</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section bg-gray">
        <div class="container">
        <div class="row">
                <div class="col-md-4">
                    <div class="card box-shadow my-4">
                        <img class="card-img-top" src="{{ asset('assets/img/debbie_equipo.jpg') }}" alt="Team image" />
                        <div class="card-body text-center">
                            <h5 class="card-title">Debbie Rosembaum</h5>
                            <p class="card-text">Coordinadora EUA</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card box-shadow my-4">
                        <img class="card-img-top" src="{{ asset('assets/img/angelica_equipo.jpg') }}" alt="Team image" />
                        <div class="card-body text-center">
                            <h5 class="card-title">Angélica Clavijo Torres</h5>
                            <p class="card-text">Desarrollo Comercial Colombia</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card box-shadow my-4">
                        <img class="card-img-top" src="{{ asset('assets/img/luisalberto_equipo.jpg') }}" alt="Team image" />
                        <div class="card-body text-center">
                            <h5 class="card-title">Luis Alberto Galindo Correa</h5>
                            <p class="card-text">Treecamp</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="card box-shadow my-4">
                        <img class="card-img-top" src="{{ asset('assets/img/auqui_equipo.jpg') }}" alt="Team image" />
                        <div class="card-body text-center">
                            <h5 class="card-title">Auqui Lozada</h5>
                            <p class="card-text">Jefa de Entregas</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card box-shadow my-4">
                        <img class="card-img-top" src="{{ asset('assets/img/lorena_equipo.jpg') }}" alt="Team image" />
                        <div class="card-body text-center">
                            <h5 class="card-title">Lorena</h5>
                            <p class="card-text">Redes Sociales</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card box-shadow my-4">
                        <img class="card-img-top" src="{{ asset('assets/img/regina_equipo.jpg') }}" alt="Team image" />
                        <div class="card-body text-center">
                            <h5 class="card-title">Regina Uges</h5>
                            <p class="card-text">Marketing y Comunicación</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
</div>

    </main>
@endsection


@section('custom-js')

@endsection
