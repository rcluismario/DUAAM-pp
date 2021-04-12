<header>
    <div class="@yield('main_div_header_class')">
        <nav class="navbar navbar-expand-md navbar-custom bg-transparent">
            <div class="container">
                <a class="navbar-brand" href="/">
                    <div class="logo">
                        <img src="{{ asset('assets/img/logo_white.png') }}" alt="Dona un árbol al mundo" width="100%">
                    </div>
                </a>
                <button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse"
                    data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="lead nav-item dropdown ml-auto">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Conócenos
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="/quienes-somos">Quiénes somos</a>
                                <a class="dropdown-item" href="/nuestro-equipo">Nuestro equipo</a>
                                <a class="dropdown-item" href="/sostenibilidad">Sostenibilidad</a>
                                <a class="dropdown-item" href="/transparencia">Transparencia</a>
                            </div>
                        </li>
                        <li class="lead nav-item ml-auto">
                            <a class="nav-link" href="/tu-arbolito/">Tu arbolito</a>
                        </li>
                        <li class="lead nav-item ml-auto">
                            <a class="nav-link" href="https://treecamp.org" target="blank_">Hola</a>
                        </li>
                        <li class="lead nav-item ml-auto">
                            <a class="nav-link" href="/contacto">Contacto</a>
                        </li>
                        <li class="lead nav-item ml-md-3 ml-auto">
                            <a class="btn btn-lg btn-outline-light" href="/donar">Donar</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        @yield('custom-header')
    </div>
</header>