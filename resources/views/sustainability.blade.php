@extends('layout.layout')
@section('title')
    Sostenibilidad
@endsection
@section('custom-css')
@endsection

@section('main_div_header_class','jumbotron jumbotron-fluid cover-sostenibilidad py-0 mb-0')
@section('content')
<main>
        <section class="section bg-gray">
    <div class="row">
        <div class="col-md-6">
            <div class="text-center mt-5">
                <h3 class="my-4">
                    Ambiental
                </h3>
                <div class="mx-5 text-muted">
                    <p class="text-justify">La restauración de estas áreas naturales ha significado una mejora
                            inmediata en la calidad del suelo, ya que en muchos lugares tiene a ser poco profundo y se
                            erosiona, también puede volverse infértil con facilidad, lo que se traducía en una alta
                            probabilidad en cuestión de deslaves y desastres naturales.</p>
                    <p class="text-justify">
                            Mediante la restauración se mejora también la captación de lluvia y se encausan las aguas
                            naturalmente, siendo más fácil aprovecharlas. Además de que los nuevos árboles apturan CO2
                            de la atmósfera, lo que mejora automaticamente la calidad de la vida de los habitantes de la
                            zona.
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="container">
                <div class="my-4">
                    <div class="embed-responsive embed-responsive-16by9 mb-4">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/gy2t157KQO8"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div>
    <div class="jumbotron img-kids"></div>
    <section class="section">
        <div class="row">
            <div class="col-md-6">
                <div class="container">
                  <div class="embed-responsive embed-responsive-16by9 mb-4">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/BWUhR1GQaYk"></iframe>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="text-center mt-5">
                    <h3 class="my-4">
                        Social
                    </h3>
                    <div class="mx-5">
                        <p class="text-justify">En las comunidades que trabajamos se imparten talleres y cursos en
                            diferentes áreas tales como finanzas básicas, cursos de educación ambiental, así como
                            dinámicas de cohesión social.</p>
                        <p class="text-justify">
                            Este proyecto ha logrado un empoderamiento y mayor integración de los miembros de la
                            comunidad, quienes ahora trabajan en conjunto para mejorar su situación tanto económica,
                            social y ambiental.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="jumbotron img-plants mb-0"></div>
    <section class="section bg-gray">
        <div class="row">
            <div class="col-md-6">
                <div class="text-center mt-5">
                    <h3 class="my-4">
                        Económico
                    </h3>
                    <div class="mx-5 text-muted">
                        <p class="text-justify">La comunidad recibe un apoyo económico por cada árbol plantado, es
                            decir, restaurar la zona se convierte en un ingreso.</p>
                        <p class="text-justify">
                            También se identifícan especies de árboles que traen otro beneficios, un ejemplo es el
                            <i>pinus
                                cembroide</i>, este árbol da un fruto que es altamente cotizado en el mercado, donde un
                            kilogramo de piñon llega a alcanzar hasta los $45 dólares; asegurando así que esa producción
                            futura genere un ingreso económico para la comunidad.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="container">
                    <div class="my-4">
                        <div class="my-4 text-center">
                            <img src="/assets/img/pino-cembroide.jpeg" alt="people" width="80%" class="img-thumbnail" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="row">
            <div class="col-md-6">
                <div class="container">
                    <div class="my-4 text-center">
                        <img src="/assets/img/legal.jpg" alt="people" width="80%" class="img-thumbnail" />
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="text-center mt-5">
                    <h3 class="my-4">
                        Legal
                    </h3>
                    <div class="mx-5">
                        <p class="text-justify">El desarrollo sostenible se encuentra en un marco legal que permite que
                            este sea posible. Son muchos los tratados internacionales que buscan preservar la
                            biodiversidad y los espacios forestales en el mundo, algunos de ellos son: la convención
                            marco sobre el cambio climático, convenio sobre la biodiversidad biológica, convencio de
                            lucha contra la desertificación; instrumentos que reflejan el interes de la comunidad global
                            por atender una problemática que pone en riesgo millones de vidas.</p>
                        <p class="text-justify">
                            Es por eso que esta Campaña se une a los esfuerzos como sociedad civil organizada
                            contribuyendo a los objetivos planteados en todas estas convenciones así como a la Agenda
                            2030 de las Naciones Unidas.
                        </p>
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