<div data-collapse="medium" data-animation="default" data-duration="400"
    data-w-id="3f0066a8-3503-4a87-030b-a9f18def7d9a" role="banner" class="navbar-mobile w-nav">
    <div class="container-9 w-container">
        <a href="{{ route('home') }}" class="brand w-nav-brand"><img
                src="{{ asset('web_assets/images/Recurso-1.png') }}" alt="" class="nav-logo"></a>
        <nav role="navigation" class="nav-menu w-nav-menu">
            <a href="{{ route('home') }}" class="nav-item-1 selectednav textshadow">Inicio</a>
            <div data-hover="" data-delay="0" class="nav-item-2-copy nav-drop w-dropdown">
                <div class="nav-drop-copy w-dropdown-toggle">
                    <div class="icon-drop textshadow w-icon-dropdown-toggle"></div>
                    <div class="text-drop textshadow">Conócenos</div>
                </div>
                <nav class="drop-list w-dropdown-list">
                    <a href="{{ route('about_us') }}" class="w-dropdown-link">¿Quienes somos?</a>
                    <a href="{{ route('our_team') }}" class="w-dropdown-link">Nuestro equipo</a>
                    <a href="{{ route('sustainability') }}" class="w-dropdown-link">Sostenibilidad</a>
                    <a href="{{ route('transparency') }}" class="w-dropdown-link">Transparencia</a>
                </nav>
            </div>
            <a href="https://treecamp.org" target="_blank" class="nav-item-1-copy textshadow">Treecamp</a>
            <a href="{{ route('your_tree') }}" class="nav-item-1-copy32 textshadow">Mi Arbolito</a>
            <a href="{{ route('contact') }}" class="nav-item-3-copy textshadow">Contacto</a>
            <a href="{{ route('donate') }}" class="nav-menu-inner-donaarbol-btn-copy w-inline-block">
                <div class="text-block-68 noshadow">Donar un árbol</div><img
                    src="{{ asset('web_assets/images/Icon-simple-gumtree_1.png') }}" loading="lazy" alt=""
                    class="nav-menu-inner-donaarbol-btn-icon">
            </a>
        </nav>
        <div class="menu-button w-nav-button">
            <div class="w-icon-nav-menu"></div>
        </div>
    </div>
</div>
<header id="nav" data-w-id="650613dd-d8db-2d6c-188e-82141c015e30" class="main-nav">
    <div class="nav-container w-container">
        <ul role="list" class="nav-grid w-list-unstyled">
            <li id="w-node-82141c015e33-2f539918" class="nav-logo-wrapper">
                <a href="{{ route('home') }}" class="nav-logo-link w-inline-block"><img
                        src="{{ asset('web_assets/images/Recurso-1.png') }}" alt="" class="nav-logo"></a>
            </li>
            <li>
                <a href="{{ route('home') }}" class="nav-item-1 selectednav textshadow">Inicio</a>
            </li>
            <li>
                <div data-hover="" data-delay="0" class="nav-item-2 nav-drop w-dropdown">
                    <div class="nav-drop w-dropdown-toggle">
                        <div class="icon-drop textshadow w-icon-dropdown-toggle"></div>
                        <div class="text-drop textshadow">Conócenos</div>
                    </div>
                    <nav class="drop-list w-dropdown-list">
                        <a href="{{ route('about_us') }}" class="w-dropdown-link">¿Quienes somos?</a>
                        <a href="{{ route('our_team') }}" class="w-dropdown-link">Nuestro equipo</a>
                        <a href="{{ route('sustainability') }}" class="w-dropdown-link">Sostenibilidad</a>
                        <a href="{{ route('transparency') }}" class="w-dropdown-link">Transparencia</a>
                    </nav>
                </div>
            </li>
            <li>
                <a href="https://treecamp.org" target="_blank" class="nav-item-1 textshadow">Treecamp</a>
            </li>
            <li>
                <a href="{{ route('your_tree') }}" class="nav-item-1 textshadow">Mi Arbolito</a>
            </li>
            <li>
                <a href="{{ route('contact') }}" class="nav-item-3 textshadow">Contacto</a>
            </li>
            <li class="list-item">
                <a href="{{ route('donate') }}" class="nav-menu-inner-donaarbol-btn w-inline-block">
                    <div class="text-block-68 noshadow">Donar</div><img
                        src="{{ asset('web_assets/images/Icon-simple-gumtree_1.png') }}" loading="lazy" alt=""
                        class="nav-menu-inner-donaarbol-btn-icon">
                </a>
            </li>
        </ul>
    </div>
</header>