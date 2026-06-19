<!-- Footer -->
<footer>
    <div class="container pb-5">
        <div class="row g-4">
            <div class="col-lg-4">
                <!-- LOGO -->
                <a class="navbar-brand brand-logo d-flex align-items-center gap-2"
                href="{{ route('home') }}">

                    <img src="{{ asset('storage/' . $company->logo) }}"
                        alt="Logo"
                        width="80"
                        class="brand-isotipo">

                    <div class="brand-text">
                        <span class="brand-title text-white">{{ $company->nombre }}</span>
                        <small class="brand-subtitle">Capacitaciones</small>
                    </div>

                </a>
                <p>{{ $company->descripcion }}</p>
            </div>
            <div class="col-sm-6 col-lg-2">
                <h4>Navegación</h4>
                <ul class="list-unstyled d-flex flex-column gap-3">
                    <li><a class="fw-bold text-gold" href="#">Inicio</a></li>
                    <li><a href="#">Nosotros</a></li>
                    <li><a href="#">Cursos</a></li>
                    <li><a href="#">Clientes</a></li>
                    <li><a href="#">Consultorías</a></li>
                </ul>
            </div>
            <div class="col-sm-6 col-lg-3">
                <h4>Contacto</h4>
                <ul class="list-unstyled d-flex flex-column gap-3">
                    <li class="d-flex gap-3"><i class="fa-solid fa-location-dot mt-1"></i> <span>{{ $company->direccion }}</span></li>
                    <li class="d-flex gap-3"><i class="fa-regular fa-envelope mt-1"></i> <span>{{ $company->email }}</span></li>
                    <li class="d-flex gap-3"><i class="fa-solid fa-phone mt-1"></i> <span>{{ $company->telefono }}</span></li>
                </ul>
            </div>
            <div class="col-lg-3">
                <h4>Legal</h4>
                <ul class="list-unstyled d-flex flex-column gap-3 mb-4">
                    <li><a href="#">Política de Privacidad</a></li>
                    <li><a href="#">Términos de Servicio</a></li>
                    <li><a href="#">Libro de Reclamaciones</a></li>
                </ul>
                <div class="d-flex gap-3 fs-5">
                    <a href="{{ $company->facebook }}" target="_blank"><i class="fa-brands fa-facebook"></i></a>
                    <a href="{{ $company->tiktok }}" target="_blank"><i class="fa-brands fa-tiktok"></i></a>
                    <a href="{{ $company->instagram }}" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                    <a href="{{ $company->linkedin }}" target="_blank"><i class="fa-brands fa-linkedin"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="border-top border-secondary-subtle border-opacity-10 pt-4 text-center">
        <p class="small mb-0">© 2026 {{ $company->nombre }} CAPACITACIONES. Todos los derechos reservados.</p>
        <p class="small mb-0">Creado por <a href="https://www.grupotyg.pe" target="_blank" class="small mb-0 text-gold">Grupo Tyg Ingenieros</a></p>
    </div>
</footer>