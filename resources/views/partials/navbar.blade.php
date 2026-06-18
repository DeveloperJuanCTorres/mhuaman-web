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

                <a href="https://aula.mhcapacitaciones.com" target="_blank"
                    class="btn btn-dark-blue rounded-4 px-4 d-flex align-items-center gap-2">
                    <i class="fa-solid fa-graduation-cap"></i>
                    AULA VIRTUAL
                </a>

            </div>
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


