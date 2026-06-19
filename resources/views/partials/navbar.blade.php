<!-- =========================================================
TOP NAVBAR
========================================================= -->
<nav class="navbar navbar-expand-lg fixed-top main-navbar">
    <div class="container">

        <!-- LOGO -->
        <a class="navbar-brand brand-logo d-flex align-items-center gap-2"
        href="{{ route('home') }}">

            <img src="{{ asset('storage/' . $company->logo) }}"
                alt="Logo"
                width="80"
                class="brand-isotipo">

            <div class="brand-text">
                <span class="brand-title">{{ $company->nombre }}</span>
                <small class="brand-subtitle">Capacitaciones</small>
            </div>

        </a>

        <!-- MOBILE BUTTON -->
        <button class="navbar-toggler border-0 shadow-none"
            type="button"
            data-bs-toggle="offcanvas"
            data-bs-target="#mobileMenu"
            aria-controls="mobileMenu">

            <span class="custom-toggler">
                <span></span>
                <span></span>
                <span></span>
            </span>
        </button>

        <!-- DESKTOP MENU -->
        <div class="collapse navbar-collapse" id="navbarNav">

            <ul class="navbar-nav mx-auto">

                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}"
                        href="{{ route('home') }}">
                        Inicio
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}"
                        href="{{ route('about') }}">
                        Nosotros
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('cursos') ? 'active' : '' }}"
                        href="{{ route('cursos') }}">
                        Cursos
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('clientes') ? 'active' : '' }}"
                        href="{{ route('clientes') }}">
                        Clientes
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('consultoria') ? 'active' : '' }}"
                        href="{{ route('consultoria') }}">
                        Consultorías
                    </a>
                </li>

            </ul>

            <!-- RIGHT -->
             <div class="d-flex align-items-center gap-3">

                <a href="https://aula.mhcapacitaciones.com"
                    target="_blank"
                    class="btn btn-dark-blue rounded-4 px-4">

                    <i class="fa-solid fa-graduation-cap"></i>

                    AULA VIRTUAL

                </a>

                @guest

                    <button
                        class="btn btn-outline-primary rounded-pill px-4"
                        data-bs-toggle="modal"
                        data-bs-target="#authModal">

                        <i class="fa-solid fa-user"></i>
                        Ingresar

                    </button>

                @endguest                

                @auth

                    <!-- Usuario -->

                    <div class="dropdown">

                        <button
                            class="btn btn-light rounded-pill dropdown-toggle px-4"
                            data-bs-toggle="dropdown">

                            <i class="fa-solid fa-circle-user"></i>

                            {{ Auth::user()->name }}

                        </button>

                        <ul class="dropdown-menu dropdown-menu-end shadow-lg border-0 rounded-4">

                            <li>

                                <a class="dropdown-item py-2"
                                    href="{{ route('perfil') }}">

                                    <i class="fa-solid fa-user me-2"></i>

                                    Mi Perfil

                                </a>

                            </li>

                            </li>

                            <li><hr></li>

                            <li>

                                <form method="POST"
                                    action="{{ route('logout') }}">

                                    @csrf

                                    <button
                                        class="dropdown-item text-danger">

                                        <i class="fa-solid fa-right-from-bracket me-2"></i>

                                        Cerrar sesión

                                    </button>

                                </form>

                            </li>

                        </ul>

                    </div>

                @endauth                

            </div>
            <!-- <div class="d-flex align-items-center gap-3">

                <a href="https://aula.mhcapacitaciones.com" target="_blank"
                    class="btn btn-dark-blue rounded-4 px-4 d-flex align-items-center gap-2">
                    <i class="fa-solid fa-graduation-cap"></i>
                    AULA VIRTUAL
                </a>

            </div> -->
        </div>
    </div>
</nav>

<!-- =========================================================
OFFCANVAS MOBILE
========================================================= -->
<div class="offcanvas offcanvas-end mobile-sidebar"
    tabindex="-1"
    id="mobileMenu"
    aria-labelledby="mobileMenuLabel">

    <!-- HEADER -->
    <div class="offcanvas-header border-bottom">

         <!-- LOGO -->
        <a class="navbar-brand brand-logo d-flex align-items-center gap-2"
        href="{{ route('home') }}">

            <img src="{{ asset('storage/' . $company->logo) }}"
                alt="Logo"
                width="80"
                class="brand-isotipo">

            <div class="brand-text">
                <span class="brand-title">{{ $company->nombre }}</span>
                <small class="brand-subtitle">Capacitaciones</small>
            </div>

        </a>

        <button type="button"
            class="btn-close shadow-none"
            data-bs-dismiss="offcanvas"
            aria-label="Close"></button>
    </div>

    <!-- BODY -->
    <div class="offcanvas-body d-flex flex-column">

        <!-- MENU -->
        <ul class="navbar-nav mobile-nav flex-column">

            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}"
                    href="{{ route('home') }}">
                    <i class="fa-solid fa-house"></i>
                    Inicio
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}"
                    href="{{ route('about') }}">
                    <i class="fa-solid fa-users"></i>
                    Nosotros
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('cursos') ? 'active' : '' }}"
                    href="{{ route('cursos') }}">
                    <i class="fa-solid fa-book-open"></i>
                    Cursos
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('clientes') ? 'active' : '' }}"
                    href="{{ route('clientes') }}">
                    <i class="fa-solid fa-handshake"></i>
                    Clientes
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('consultoria') ? 'active' : '' }}"
                    href="{{ route('consultoria') }}">
                    <i class="fa-solid fa-briefcase"></i>
                    Consultorías
                </a>
            </li>

        </ul>

        <!-- BUTTON -->
        <div class="mt-auto pt-4">

            <a href="https://aula.mhcapacitaciones.com" target="_blank"
                class="btn btn-dark-blue w-100 rounded-4 py-3 fw-semibold d-flex align-items-center justify-content-center gap-2">

                <i class="fa-solid fa-graduation-cap"></i>
                INGRESAR AL AULA VIRTUAL

            </a>

        </div>

    </div>
</div>



<div class="modal fade" id="authModal" tabindex="-1">

    <div class="modal-dialog modal-dialog-centered modal-lg">

        <div class="modal-content auth-modal">

            <div class="row g-0">

                <div class="col-lg-5 auth-left">

                    <div>

                        <h2>Bienvenido</h2>

                        <p>
                            Accede a nuestros cursos especializados y potencia tu carrera profesional.
                        </p>

                    </div>

                </div>

                <div class="col-lg-7">

                    <div class="auth-right">

                        <ul class="nav nav-pills nav-fill mb-4">

                            <li class="nav-item">

                                <button
                                    class="nav-link active"
                                    data-bs-toggle="pill"
                                    data-bs-target="#loginTab">

                                    Iniciar Sesión

                                </button>

                            </li>

                            <li class="nav-item">

                                <button
                                    class="nav-link"
                                    data-bs-toggle="pill"
                                    data-bs-target="#registerTab">

                                    Registrarme

                                </button>

                            </li>

                        </ul>

                        <div class="tab-content">

                            <div class="tab-pane fade show active" id="loginTab">

                                <form id="loginForm">

                                    @csrf

                                    <div class="mb-3">

                                        <input
                                            type="email"
                                            class="form-control"
                                            name="email"
                                            placeholder="Correo electrónico">

                                    </div>

                                    <div class="mb-3">

                                        <input
                                            type="password"
                                            class="form-control"
                                            name="password"
                                            placeholder="Contraseña">

                                    </div>

                                    <button
                                        class="btn btn-dark w-100 py-3">

                                        Ingresar

                                    </button>

                                </form>

                            </div>

                            <div class="tab-pane fade" id="registerTab">

                                <form id="registerForm">

                                    @csrf

                                    <div class="mb-3">

                                        <input
                                            class="form-control"
                                            name="name"
                                            placeholder="Nombre completo">

                                    </div>

                                    <div class="mb-3">

                                        <input
                                            class="form-control"
                                            name="email"
                                            placeholder="Correo">

                                    </div>

                                    <div class="mb-3">

                                        <input
                                            type="password"
                                            class="form-control"
                                            name="password"
                                            placeholder="Contraseña">

                                    </div>

                                    <div class="mb-3">

                                        <input
                                            type="password"
                                            class="form-control"
                                            name="password_confirmation"
                                            placeholder="Confirmar contraseña">

                                    </div>

                                    <button
                                        class="btn btn-primary w-100 py-3">

                                        Crear Cuenta

                                    </button>

                                </form>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>


