<!-- TopNavBar -->
<nav class="navbar navbar-expand-lg fixed-top">
    <div class="container">
        <a class="navbar-brand" href="#">M HUAMAN</a>
        <button class="navbar-toggler" data-bs-target="#navbarNav" data-bs-toggle="collapse" type="button">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item"><a class="nav-link active" href="{{ route('home') }}">Inicio</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">Nosotros</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('cursos') }}">Cursos</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('clientes') }}">Clientes</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('consultoria') }}">Consultorías</a></li>
            </ul>
            <div class="d-flex align-items-center gap-3">
                <!-- <div class="d-none d-xl-flex gap-3 me-3 text-primary">
                    <i class="fa-regular fa-envelope cursor-pointer"></i>
                    <i class="fa-solid fa-phone cursor-pointer"></i>
                </div> -->
                <button class="btn btn-dark-blue rounded-3 d-flex align-items-center gap-2">
                    <i class="fa-solid fa-graduation-cap"></i> AULA VIRTUAL
                </button>
            </div>
        </div>
    </div>
</nav>