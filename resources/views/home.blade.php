@extends('layout.layout')
@section('title')
Inicio
@endsection
@section('custom-css')
@endsection

@section('main_div_header_class','jumbotron jumbotron-fluid cover-home py-0')

@section('custom-header')
<div class="container">
    <h3 class="cover-title">¡Tu participación es importante!</h3>
    <h4 class="cover-subtitle">Necesitamos más árboles en el mundo</h4>
    <a class="btn btn-lg btn-outline-light" href="/donar">Donar</a>
</div>
@endsection

@section('content')
<header id="hero-overlay" class="main-portada">
    <div class="centered-container w-container">
        <h1 class="home-main-h1-copy textshadow">Decide tu Mundo, planta un árbol</h1>
        <h1 class="home-main-h2 textshadow">Los árboles ayudan a reducir el dióxido de carbono de la atmósfera</h1>
        <a href="{{ route('donate') }}" class="nav boxshadow w-inline-block">
            <div class="text-block-68-copy1214 noshadow">Donar un árbol</div><img
                src="{{ asset('web_assets/images/Icon-simple-gumtree.png') }}" loading="lazy" alt="" class="image">
        </a>
    </div>
</header>
<div class="main-go-to-top">
    <button onclick="topFunction()" id="scrollButton">
        <img src="{{ asset('web_assets/images/up-chevron.svg') }}" style="fill:white;" />
    </button>
</div>
<div class="main-proposito">
    <div class="w-container">
        <h1 class="home-main-h1">¡Te necesitamos!</h1>
        <h1 class="home-main-h2-copy74">¡El tiempo se nos acaba! juntos podemos combatir el cambio climático plantando
            muchos árboles.</h1>
        <div class="div-block-112">
            <div>
                <div class="div-block-90 w-clearfix"><img src="{{ asset('web_assets/images/15-Global-Warming.png') }}"
                        loading="lazy" alt="" class="image-3">
                    <h1 class="home-main-h2-copy">Somos una campaña de restauración ambiental que busca <span
                            class="text-span">luchar contra el cambio climático.</span></h1>
                </div>
                <div class="div-block-91 w-clearfix"><img src="{{ asset('web_assets/images/13-Home.png') }}"
                        loading="lazy" alt="" class="image-3">
                    <h1 class="home-main-h2-22">Además de ayudar al planeta, buscamos <span class="text-span">ayudar a
                            comunidades </span>con rezago social.</h1>
                </div>
                <div class="div-block-92 w-clearfix"><img src="{{ asset('web_assets/images/30-Earth.png') }}"
                        loading="lazy" alt="" class="image-3">
                    <h1 class="home-main-h2-copy-copy-copy">Ayúdanos a cumplir nuestra meta de plantar<br> <span
                            class="text-span">100 mil árboles para el 2030.</span></h1>
                </div>
            </div>
            <div id="w-node-ca503e702f79-2f539918"><img src="{{ asset('web_assets/images/Grupo-381.png') }}"
                    loading="lazy"
                    sizes="(max-width: 479px) 100vw, (max-width: 767px) 440px, (min-width: 991px) 300px, 403.1875px"
                    srcset="web_assets/images/Grupo-381-p-500.png 500w, images/Grupo-381.png 751w" alt=""
                    class="image-2"></div>
        </div>
        <div>
            <a href="https://www.youtube.com/watch?v=pHlZ_YiGgdk&ab_channel=Donaun%C3%81rbolalMundo" target="_blank"
                class="nav-copy boxshadow w-inline-block">
                <div class="text-block-68-copy noshadow">Ver Video</div><img
                    src="{{ asset('web_assets/images/Icon-ionic-md-arrow-dropright-circle.png') }}" loading="lazy" alt=""
                    class="image-copy-copyjpmee">
            </a>
        </div>
    </div>
</div>
<div class="main-plantaciones">
    <div class="container-2 w-container">
        <h1 class="home-main-h1-cop777">Nuestros árboles los plantamos aqui</h1>
        <h1 class="home-main-h2-copy74-cop774">Con ayuda de todos logramos plantar nuestros árboles en estos lugares.
            <br>Lugares increíbles que son nuestros pulmones con gente muy valiosa que ayuda a cuidar nuestros árboles.
        </h1>
        <div class="div-block-94"><img src="{{ asset('web_assets/images/Trazado-5.png') }}" loading="lazy" alt=""
                class="image-4"></div>
        <div class="div-block-95">
            <div data-delay="4000" data-animation="slide" data-autoplay="1" data-duration="500" data-infinite="1"
                class="slider w-slider">
                <div class="slider-wrap w-slider-mask">
                    <div class="slides w-slide">
                        <div class="slider-grid">
                            <a href="#" class="div-block-80 w-inline-block">
                                <div class="text-block-65">Reserva de la Biosfera de la Sierra Gorda.</div>
                                <div class="text-block-65-copy">Querétaro, México.</div>
                            </a>
                            <a href="#" class="div-block-80-copy w-inline-block">
                                <div class="text-block-65">Reserva de la Biosfera de la Tehuacán.</div>
                                <div class="text-block-65-copy">Cuicatlán. Puebla, México.</div>
                            </a>
                            <a href="#" class="div-block-80-cop7 w-inline-block">
                                <div class="text-block-65">Bosque de la Primavera.<br>‍</div>
                                <div class="text-block-65-copy">Jalisco, México.</div>
                            </a>
                        </div>
                    </div>
                    <div class="slides2 w-slide">
                        <div class="slider-grid-copy">
                            <a href="#" class="div-block-80-copy74 w-inline-block">
                                <div class="text-block-65">Comunidad del Magistral.<br>‍</div>
                                <div class="text-block-65-copy">Jalisco, México.</div>
                            </a>
                            <a href="#" class="div-block-80-copy-cop7474 w-inline-block">
                                <div class="text-block-65">Córdoba y Calarcá.<br>‍</div>
                                <div class="text-block-65-copy">Quindío, Colombia.</div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="tao-main-related-arrowleft w-slider-arrow-left">
                    <div class="tao-main-related-arrowleft-icon w-icon-slider-left"></div>
                </div>
                <div class="tao-main-related-arrowright w-slider-arrow-right">
                    <div class="tao-main-related-arrowright-icon w-icon-slider-right"></div>
                </div>
                <div class="tao-main-related-botpoints w-slider-nav w-round"></div>
            </div>
            <div data-delay="4000" data-animation="slide" data-autoplay="1" data-duration="500" data-infinite="1"
                class="slider-mobile w-slider">
                <div class="slider-wrap-copy w-slider-mask">
                    <div class="slides-copy w-slide">
                        <div class="slider-grid-copy">
                            <a href="#" class="div-block-80 w-inline-block">
                                <div class="text-block-65">Reserva de la Biosfera de la Sierra Gorda.</div>
                                <div class="text-block-65-copy">Querétaro, México.</div>
                            </a>
                        </div>
                    </div>
                    <div class="w-slide">
                        <div class="slider-grid-copy">
                            <a href="#" class="div-block-80-copy w-inline-block">
                                <div class="text-block-65">Reserva de la Biosfera de la Tehuacán.</div>
                                <div class="text-block-65-copy">Cuicatlán. Puebla, México.</div>
                            </a>
                        </div>
                    </div>
                    <div class="w-slide">
                        <div class="slider-grid-copy">
                            <a href="#" class="div-block-80-cop7 w-inline-block">
                                <div class="text-block-65">Bosque de la Primavera.<br>‍</div>
                                <div class="text-block-65-copy">Jalisco, México.</div>
                            </a>
                        </div>
                    </div>
                    <div class="w-slide">
                        <div class="slider-grid-copy-copy">
                            <a href="#" class="div-block-80-copy74 w-inline-block">
                                <div class="text-block-65">Comunidad del Magistral.<br>‍</div>
                                <div class="text-block-65-copy">Jalisco, México.</div>
                            </a>
                        </div>
                    </div>
                    <div class="slides2-copy w-slide">
                        <div class="slider-grid-copy-copy">
                            <a href="#" class="div-block-80-copy-cop7474 w-inline-block">
                                <div class="text-block-65">Córdoba y Calarcá.<br>‍</div>
                                <div class="text-block-65-copy">Quindío, Colombia.</div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="tao-main-related-arrowleft-copy w-slider-arrow-left">
                    <div class="tao-main-related-arrowleft-icon-copy w-icon-slider-left"></div>
                </div>
                <div class="tao-main-related-arrowright-copy w-slider-arrow-right">
                    <div class="tao-main-related-arrowright-icon-copy w-icon-slider-right"></div>
                </div>
                <div class="tao-main-related-botpoints-copy w-slider-nav w-round"></div>
            </div>
        </div>
    </div>
</div>
<div class="main-donaciones">
    <div class="w-container">
        <div class="w-clearfix">
            <h1 class="home-main-h14 noshadow">¿Cómo puedes ayudar?</h1>
            <h1 class="home-main-h2-copy74-copy noshadow">Necesitamos más arboles en el mundo</h1>
        </div>
        <div class="div-block-113">
            <div class="_78578 w-clearfix">
                <h1 class="_456 noshadow">15 Mil Millones</h1>
                <h1 class="_7867 noshadow">Se parte del cambio</h1>
                <h1 class="_786786-copy noshadow">15 mil millones de árboles se pierden en el mundo cada año.</h1>
                <div class="_45">
                    <a href="{{ route('donate') }}" class="nav-copy1212 boxshadow noshadow w-inline-block">
                        <div class="text-block-68-copy">Donar un árbol</div><img
                            src="{{ asset('web_assets/images/Icon-simple-gumtree.png') }}" loading="lazy" alt=""
                            class="image">
                    </a>
                </div>
            </div>
            <div class="_78578-copy12 w-clearfix">
                <h1 class="_456 noshadow">50 por ciento</h1>
                <h1 class="_7867 noshadow">Tú eres parte del cambio</h1>
                <h1 class="_786786-copy12 noshadow">50% de todas las especies terrestres podrían perderse este siglo.
                </h1>
                <div class="_45">
                    <a href="{{ route('donate') }}" class="nav-copy-copy-copy boxshadow noshadow w-inline-block">
                        <div class="text-block-68-copy">Árbol con Foto</div><img
                            src="{{ asset('web_assets/images/Icon-awesome-camera.png') }}" loading="lazy" alt=""
                            class="image-copy">
                    </a>
                </div>
            </div>
            <div class="_78578-copy w-clearfix">
                <h1 class="_456-copy noshadow">500 mil hectáreas</h1>
                <h1 class="_7867 noshadow">Contamos contigo</h1>
                <h1 class="_786786 noshadow">500 000 mil hectáreas de bosques y selvas se pierden en México cada año.
                </h1>
                <div class="_45">
                    <a href="{{ route('donate') }}" class="nav-copy-copy-copy-copy boxshadow noshadow w-inline-block">
                        <div class="text-block-68-copy">Donar a Organización</div><img
                            src="{{ asset('web_assets/images/Icon-awesome-heart.png') }}" loading="lazy" alt=""
                            class="image-copy">
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="main-gracias">
    <div class="container-3 w-container">
        <div class="w-clearfix">
            <h1 class="home-main-h1-cop777">¡Muchas Gracias!</h1>
            <h1 class="home-main-h2-copy74-cop774">Gracias a miles de donadores este proyecto es posible, entre ellos,
                valiosas empresas <br>e instituciones que han ayudado a nuestra causa de manera muy especial.</h1>
        </div>
        <div class="div-block-105">
            <div class="div-block-109"><img src="{{ asset('web_assets/images/Enmascarar-grupo-34.png') }}"
                    loading="lazy" alt="" class="image-8"><img
                    src="{{ asset('web_assets/images/Enmascarar-grupo-95.png') }}" loading="lazy" alt=""
                    class="image-5"><img src="{{ asset('web_assets/images/Enmascarar-grupo-94.png') }}" loading="lazy"
                    alt="" class="image-6"></div>
            <div class="div-block-110"><img src="{{ asset('web_assets/images/Enmascarar-grupo-98.png') }}"
                    loading="lazy" alt="" class="image-7"><img
                    src="{{ asset('web_assets/images/Enmascarar-grupo-97.png') }}" loading="lazy" alt=""
                    class="image-9"><img src="{{ asset('web_assets/images/Enmascarar-grupo-36.png') }}" loading="lazy"
                    alt="" class="image-10"></div>
        </div>
    </div>
</div>
<div class="main-acercade">
    <div class="container-10 w-container">
        <div class="div-block-126 w-clearfix">
            <h1 class="home-main-h1-copy441">Acerca de nosotros</h1>
            <h1 class="home-main-h2-copy74-copy4142">Dona un Árbol al Mundo es una campaña de restauración ambiental y
                empoderamiento social que busca recuperar nuestros bosques y ayudar a comunidades con rezago social.
            </h1>
        </div>
        <div class="div-block-94-copy"><img src="{{ asset('web_assets/images/Trazado-5.png') }}" loading="lazy" alt=""
                class="image-4"></div>
        <div class="div-block-114">
            <div class="div-block-89">
                <div class="div-block-90-copy414 w-clearfix">
                    <h1 class="home-main-h2-copy-copy">Surgió en julio de 2017 por iniciativa del Portal Social y
                        The<br>Tree School, quienes junto con muchas comunidades en México y Colombia trabajan para
                        lograr el objetivo de reforestar más de 100 mil árboles para el 2030.</h1>
                </div>
                <div class="div-block-90-copy w-clearfix">
                    <h1 class="home-main-h2-copy-copy45">Por ello esta campaña convoca a personas, empresas y gobierno
                        para que hagan conciencia de los retos ambientales que enfrentamos, conozcan los beneficios que
                        un árbol trae al mundo y se sumen a apoyar esta causa.</h1>
                </div>
                <div class="_45">
                    <a href="{{ route('about_us') }}" class="nav-copy1212-copy45 boxshadow w-inline-block">
                        <div class="text-block-68-copy">Conócenos</div><img
                            src="{{ asset('web_assets/images/Sustracción-3.png') }}" loading="lazy" alt=""
                            class="image">
                    </a>
                </div>
            </div>
            <div id="w-node-f793d85bad2b-2f539918" class="div-block-106"><img
                    src="{{ asset('web_assets/images/Man-planting-trees-for-greening-illustration-01.png') }}"
                    loading="lazy"
                    sizes="(max-width: 479px) 100vw, (max-width: 767px) 75vw, (max-width: 991px) 330px, 480px"
                    src="images/Man-planting-trees-for-greening-illustration-01-p-500.png 500w, images/Man-planting-trees-for-greening-illustration-01.png 890w"
                    alt="" class="image-2-copy"></div>
        </div>
    </div>
</div>
<div class="main-testimonio">
    <div class="container-4 w-container">
        <div data-delay="4000" data-animation="slide" data-autoplay="1" data-duration="500" data-infinite="1"
            class="slider-2 w-slider">
            <div class="mask w-slider-mask">
                <div class="slide w-slide">
                    <div class="div-block-115"><img src="{{ asset('web_assets/images/Grupo-401.png') }}" loading="lazy"
                            alt="" class="image-11">
                        <div class="div-block-123"><img
                                src="{{ asset('web_assets/images/Icon-open-double-quote-sans-left.png') }}"
                                loading="lazy" alt="" class="image-12">
                            <h1 class="heading-3"><em class="italic-text">“Donar un árbol al mundo es seguir dándole
                                    vida a nuestro planeta”</em></h1>
                            <h1 class="heading-2">Tina</h1>
                            <h1 class="heading">Voluntaria, Querétaro, México.</h1>
                        </div><img src="{{ asset('web_assets/images/Grupo-401.png') }}" loading="lazy" alt=""
                            class="image-11-copy">
                    </div>
                </div>
                <div class="slide-copy w-slide">
                    <div class="div-block-115"><img src="{{ asset('web_assets/images/Grupo-de-desplazamiento-1.png') }}"
                            loading="lazy" id="w-node-17eb5a64c6cb-2f539918"
                            sizes="(max-width: 479px) 100vw, (max-width: 767px) 250px, (max-width: 991px) 300px, 360px"
                            srcset="web_assets/images/Grupo-de-desplazamiento-1-p-500.png 500w, web_assets/images/Grupo-de-desplazamiento-1.png 646w"
                            alt="" class="image-11-copy-copy">
                        <div class="div-block-123"><img
                                src="{{ asset('web_assets/images/Icon-open-double-quote-sans-left.png') }}"
                                loading="lazy" alt="" class="image-12">
                            <h1 class="heading-3"><em class="italic-text-copy">“Conservar e impulsar mi comunidad es mi
                                    propósito como persona”</em></h1>
                            <h1 class="heading-2">Jair Garay</h1>
                            <h1 class="heading">Voluntaria, Querétaro, México.</h1>
                        </div><img src="{{ asset('web_assets/images/Grupo-401.png') }}" loading="lazy" alt=""
                            class="image-11-copy">
                    </div>
                </div>
            </div>
            <div class="left-arrow w-slider-arrow-left">
                <div class="icon-3 w-icon-slider-left"></div>
            </div>
            <div class="right-arrow w-slider-arrow-right">
                <div class="icon-2 w-icon-slider-right"></div>
            </div>
            <div class="slide-nav w-slider-nav w-slider-nav-invert w-round"></div>
        </div>
    </div>
</div>
<div class="main-galeria">
    <div class="container-6 w-container">
        <div data-animation="slide" data-duration="500" data-infinite="1" class="slider-3 w-slider">
            <div class="w-slider-mask">
                <div class="w-slide">
                    <div class="div-block-122"><img src="{{ asset('web_assets/images/Foto-5-.JPG') }}" loading="lazy"
                            sizes="(max-width: 767px) 20vw, 10vw"
                            srcset="web_assets/images/Foto-5--p-500.jpeg 500w, web_assets/images/Foto-5--p-800.jpeg 800w, web_assets/images/Foto-5--p-1080.jpeg 1080w, web_assets/images/Foto-5--p-1600.jpeg 1600w, web_assets/images/Foto-5-.JPG 3024w"
                            alt="" class="image-19"><img src="{{ asset('web_assets/images/Foto-13.JPG') }}"
                            loading="lazy" sizes="(max-width: 767px) 20vw, 10vw"
                            srcset="web_assets/images/Foto-13-p-500.jpeg 500w, web_assets/images/Foto-13-p-800.jpeg 800w, web_assets/images/Foto-13-p-1080.jpeg 1080w, web_assets/images/Foto-13-p-1600.jpeg 1600w, web_assets/images/Foto-13.JPG 3024w"
                            alt="" class="image-19"><img src="{{ asset('web_assets/images/JDQG7683.jpg') }}"
                            loading="lazy" sizes="(max-width: 767px) 20vw, 10vw"
                            srcset="web_assets/images/JDQG7683-p-500.jpeg 500w, web_assets/images/JDQG7683-p-800.jpeg 800w, web_assets/images/JDQG7683.jpg 960w"
                            alt="" class="image-19"><img src="{{ asset('web_assets/images/ICNY8430.jpg') }}"
                            loading="lazy" sizes="(max-width: 767px) 20vw, 10vw"
                            srcset="web_assets/images/ICNY8430-p-500.jpeg 500w, web_assets/images/ICNY8430-p-800.jpeg 800w, web_assets/images/ICNY8430.jpg 960w"
                            alt="" class="image-19"><img src="{{ asset('web_assets/images/IMG_5337.JPG') }}"
                            loading="lazy" sizes="(max-width: 767px) 20vw, 10vw"
                            srcset="web_assets/images/IMG_5337-p-500.jpeg 500w, web_assets/images/IMG_5337-p-1080.jpeg 1080w, web_assets/images/IMG_5337-p-1600.jpeg 1600w, web_assets/images/IMG_5337-p-2000.jpeg 2000w, web_assets/images/IMG_5337.JPG 2448w"
                            alt="" class="image-19"><img src="{{ asset('web_assets/images/IMG_5354.JPG') }}"
                            loading="lazy" sizes="(max-width: 767px) 20vw, 10vw"
                            srcset="web_assets/images/IMG_5354-p-500.jpeg 500w, web_assets/images/IMG_5354-p-1600.jpeg 1600w, web_assets/images/IMG_5354-p-2000.jpeg 2000w, web_assets/images/IMG_5354.JPG 2448w"
                            alt="" class="image-19"><img src="{{ asset('web_assets/images/SGXZ7685.jpg') }}"
                            loading="lazy" alt="" class="image-19"><img
                            src="{{ asset('web_assets/images/IMG_5488.JPG') }}" loading="lazy"
                            sizes="(max-width: 767px) 20vw, 10vw"
                            srcset="web_assets/images/IMG_5488-p-1080.jpeg 1080w, web_assets/images/IMG_5488-p-1600.jpeg 1600w, web_assets/images/IMG_5488-p-2000.jpeg 2000w, web_assets/images/IMG_5488.JPG 2448w"
                            alt="" class="image-19"><img src="{{ asset('web_assets/images/IMG_5486.JPG') }}"
                            loading="lazy" sizes="(max-width: 767px) 20vw, 10vw"
                            srcset="web_assets/images/IMG_5486-p-500.jpeg 500w, web_assets/images/IMG_5486-p-1080.jpeg 1080w, web_assets/images/IMG_5486-p-1600.jpeg 1600w, web_assets/images/IMG_5486-p-2000.jpeg 2000w, web_assets/images/IMG_5486.JPG 2448w"
                            alt="" class="image-19"><img src="{{ asset('web_assets/images/FQEA3749-1.jpg') }}"
                            loading="lazy" sizes="(max-width: 767px) 20vw, 10vw"
                            srcset="web_assets/images/FQEA3749-1-p-500.jpeg 500w, web_assets/images/FQEA3749-1-p-800.jpeg 800w, web_assets/images/FQEA3749-1.jpg 960w"
                            alt="" class="image-19"></div>
                </div>
                <div class="w-slide">
                    <div class="div-block-122"><img src="{{ asset('web_assets/images/Foto-5-.JPG') }}" loading="lazy"
                            sizes="(max-width: 767px) 20vw, 10vw"
                            srcset="web_assets/images/Foto-5--p-500.jpeg 500w, web_assets/images/Foto-5--p-800.jpeg 800w, web_assets/images/Foto-5--p-1080.jpeg 1080w, web_assets/images/Foto-5--p-1600.jpeg 1600w, web_assets/images/Foto-5-.JPG 3024w"
                            alt="" class="image-19"><img src="{{ asset('web_assets/images/Foto-13.JPG') }}"
                            loading="lazy" sizes="(max-width: 767px) 20vw, 10vw"
                            srcset="web_assets/images/Foto-13-p-500.jpeg 500w, web_assets/images/Foto-13-p-800.jpeg 800w, web_assets/images/Foto-13-p-1080.jpeg 1080w, web_assets/images/Foto-13-p-1600.jpeg 1600w, web_assets/images/Foto-13.JPG 3024w"
                            alt="" class="image-19"><img src="{{ asset('web_assets/images/JDQG7683.jpg') }}"
                            loading="lazy" sizes="(max-width: 767px) 20vw, 10vw"
                            srcset="web_assets/images/JDQG7683-p-500.jpeg 500w, web_assets/images/JDQG7683-p-800.jpeg 800w, web_assets/images/JDQG7683.jpg 960w"
                            alt="" class="image-19"><img src="{{ asset('web_assets/images/ICNY8430.jpg') }}"
                            loading="lazy" sizes="(max-width: 767px) 20vw, 10vw"
                            srcset="web_assets/images/ICNY8430-p-500.jpeg 500w, web_assets/images/ICNY8430-p-800.jpeg 800w, web_assets/images/ICNY8430.jpg 960w"
                            alt="" class="image-19"><img src="{{ asset('web_assets/images/IMG_5337.JPG') }}"
                            loading="lazy" sizes="(max-width: 767px) 20vw, 10vw"
                            srcset="web_assets/images/IMG_5337-p-500.jpeg 500w, web_assets/images/IMG_5337-p-1080.jpeg 1080w, web_assets/images/IMG_5337-p-1600.jpeg 1600w, web_assets/images/IMG_5337-p-2000.jpeg 2000w, web_assets/images/IMG_5337.JPG 2448w"
                            alt="" class="image-19"><img src="{{ asset('web_assets/images/IMG_5354.JPG') }}"
                            loading="lazy" sizes="(max-width: 767px) 20vw, 10vw"
                            srcset="web_assets/images/IMG_5354-p-500.jpeg 500w, web_assets/images/IMG_5354-p-1600.jpeg 1600w, web_assets/images/IMG_5354-p-2000.jpeg 2000w, web_assets/images/IMG_5354.JPG 2448w"
                            alt="" class="image-19"><img src="{{ asset('web_assets/images/SGXZ7685.jpg') }}"
                            loading="lazy" alt="" class="image-19"><img
                            src="{{ asset('web_assets/images/IMG_5488.JPG') }}" loading="lazy"
                            sizes="(max-width: 767px) 20vw, 10vw"
                            srcset="web_assets/images/IMG_5488-p-1080.jpeg 1080w, web_assets/images/IMG_5488-p-1600.jpeg 1600w, web_assets/images/IMG_5488-p-2000.jpeg 2000w, web_assets/images/IMG_5488.JPG 2448w"
                            alt="" class="image-19"><img src="{{ asset('web_assets/images/IMG_5486.JPG') }}"
                            loading="lazy" sizes="(max-width: 767px) 20vw, 10vw"
                            srcset="web_assets/images/IMG_5486-p-500.jpeg 500w, web_assets/images/IMG_5486-p-1080.jpeg 1080w, web_assets/images/IMG_5486-p-1600.jpeg 1600w, web_assets/images/IMG_5486-p-2000.jpeg 2000w, web_assets/images/IMG_5486.JPG 2448w"
                            alt="" class="image-19"><img src="{{ asset('web_assets/images/FQEA3749-1.jpg') }}"
                            loading="lazy" sizes="(max-width: 767px) 20vw, 10vw"
                            srcset="web_assets/images/FQEA3749-1-p-500.jpeg 500w, web_assets/images/FQEA3749-1-p-800.jpeg 800w, web_assets/images/FQEA3749-1.jpg 960w"
                            alt="" class="image-19"></div>
                </div>
            </div>
            <div class="left-arrow-2 w-slider-arrow-left">
                <div class="icon-4 w-icon-slider-left"></div>
            </div>
            <div class="right-arrow-2 w-slider-arrow-right">
                <div class="icon-5 w-icon-slider-right"></div>
            </div>
            <div class="slide-nav-2 w-slider-nav w-round"></div>
        </div>
    </div>

</div>

@endsection


@section('custom-js')
    <script>

        //Scroll button
        mybutton = document.getElementById("scrollButton");
        window.onscroll = function() {scrollFunction()};

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                mybutton.style.display = "block";
            } else {
                mybutton.style.display = "none";
            }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            document.body.scrollTop = 0; // For Safari
            document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
        }

    </script>
@endsection
