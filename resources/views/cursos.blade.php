@extends('layouts.app')

@section('content')

<!-- Hero Section -->
<section class="hero-section-cursos">
    <div class="container position-relative z-1">
        <div class="row">
            <div class="col-lg-7">
                <h1 class="display-5">Formación Especializada de Alto Impacto</h1>
                <p class="lead opacity-75">Capacitación académica y corporativa en Auditoría, Control y Gestión Pública con los estándares internacionales más exigentes.</p>
            </div>
        </div>
    </div>
    <div class="hero-accent"></div>
</section>
<!-- Search & Filters -->
<section class="filter-bar shadow-sm">
    <div class="container">
        <div class="row align-items-center g-4">
            <div class="col-lg-6">
                <div class="search-input-group">
                    <i class="fa-solid fa-search"></i>
                    <input class="form-control form-control-lg" placeholder="Buscar cursos por nombre o especialidad..." type="text" />
                </div>
            </div>
            <div class="col-lg-6">
                <div class="d-flex gap-2 overflow-x-auto pb-1">
                    <button class="filter-btn active">Todos</button>
                    <button class="filter-btn">Auditoría</button>
                    <button class="filter-btn">Control</button>
                    <button class="filter-btn">Gestión Pública</button>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Courses Grid -->
<section class="py-5 my-5">
    <div class="container">
        <div class="row g-4">
            <!-- Course 1 -->
            <div class="col-md-6 col-lg-4">
                <div class="card course-card">
                    <div class="card-img-container">
                        <img alt="Auditoría Financiera" class="card-img-top" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCLu6UJJt4FnMkOQOrOtwb4K1cwL3qenfqWdofW-LsnuTiTZkHqmW2a1tMw7DAlaQPe8dY8Utpl5Kf_O5BBavyYM5Ek_5J9aDhxPbzvAO7ISNST9gvduo50ROXaUodhosMRvgFpgMRy241g14MEFruzynpXiJuDO_CCIPPciglwqM0BTQ8UbnzKwVOCDl7CnFnEmVgfRaWGgjRwbAiq-OrdUxgStzQeJMdA2aZhBE2ixNtMLHWzhQrHpj7vbJkehAqTE9aH0QeecT0" />
                        <span class="badge-new">Nuevo</span>
                    </div>
                    <div class="card-body">
                        <h3 class="card-title">Auditoría Financiera Gubernamental</h3>
                        <ul class="info-list">
                            <li><i class="fa-solid fa-user"></i> Dr. Roberto Huaman</li>
                            <li><i class="fa-solid fa-laptop"></i> Virtual (En Vivo)</li>
                            <li><i class="fa-solid fa-clock"></i> 48 Horas Académicas</li>
                            <li><i class="fa-solid fa-certificate"></i> Certificación Universitaria</li>
                        </ul>
                        <div class="card-footer-custom">
                            <div>
                                <span class="price-label">Inversión</span>
                                <span class="price-value">S/ 450.00</span>
                            </div>
                            <button class="btn btn-inscribirme">Inscribirme</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Course 2 -->
            <div class="col-md-6 col-lg-4">
                <div class="card course-card">
                    <div class="card-img-container">
                        <img alt="Control Interno" class="card-img-top" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBL3v6gOK2IVPa7JX9_FZLCkLJRGDtxMmrhQZhQXmudC0qFwWfcwm80CRfi82xE6MWYZggV7y7U25s_UZHrvN36ycHI4aUu9p0Ikic3WV9wmgkdZhtZCm7PKKZltaUdvr7nNpaAVvPy0AENDcmCPW02PUBrZUpgyIE6oGFIpCmh3KkJ6HfAbEHyT19UtWTDYj5yus--0dkFSB3TGGyMYkCenK8po4COYMlwDU3jzhBwGcprRP6NBgLo1cHJjur4puYMMXHShUk2Br8" />
                        <span class="badge-popular">Popular</span>
                    </div>
                    <div class="card-body">
                        <h3 class="card-title">Sistema Nacional de Control</h3>
                        <ul class="info-list">
                            <li><i class="fa-solid fa-user"></i> Mag. Elena Vargas</li>
                            <li><i class="fa-solid fa-circle-play"></i> Asincrónico (Grabado)</li>
                            <li><i class="fa-solid fa-clock"></i> 32 Horas Académicas</li>
                            <li><i class="fa-solid fa-certificate"></i> Certificación Institucional</li>
                        </ul>
                        <div class="card-footer-custom">
                            <div>
                                <span class="price-label">Inversión</span>
                                <span class="price-value">S/ 320.00</span>
                            </div>
                            <button class="btn btn-inscribirme">Inscribirme</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Course 3 -->
            <div class="col-md-6 col-lg-4">
                <div class="card course-card">
                    <div class="card-img-container">
                        <img alt="Gestión Pública" class="card-img-top" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDbaQHEmsqZsIV3_3z8XhqPyVoGgDfdyoNiGIGXKqveVaZntkK_AUUfxJQGtckeGOjiigdyueE8pQ74HAjjWwgGOb6URww2-TlhDDgvkPzY3tSJJdEZXIs0DZIV_OkdLlIAwAqYCae0nwyThTv8OAuzfy4hwOtKasR2KFYmBqSpukWxbeAwHzxjEGTAmLHiAMmfgW26vvXirg7zqi6_diIs3u0kfgQDoVicRQ39mUZ85csvoqU-L2898zvlyeSaQrkHP_bDfWQY0-8" />
                        <span class="badge-new">Nuevo</span>
                    </div>
                    <div class="card-body">
                        <h3 class="card-title">Gestión Pública por Resultados</h3>
                        <ul class="info-list">
                            <li><i class="fa-solid fa-user"></i> Eco. Juan Carlos Paz</li>
                            <li><i class="fa-solid fa-laptop"></i> Virtual (En Vivo)</li>
                            <li><i class="fa-solid fa-clock"></i> 60 Horas Académicas</li>
                            <li><i class="fa-solid fa-certificate"></i> Doble Certificación</li>
                        </ul>
                        <div class="card-footer-custom">
                            <div>
                                <span class="price-label">Inversión</span>
                                <span class="price-value">S/ 580.00</span>
                            </div>
                            <button class="btn btn-inscribirme">Inscribirme</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Course 4 -->
            <div class="col-md-6 col-lg-4">
                <div class="card course-card">
                    <div class="card-img-container">
                        <img alt="Auditoría Forense" class="card-img-top" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBKvlpzBw-L9OnPwEM6p9QERlH4tO5BITy4XJjvlJA8iVPXJxYp7A8xnLsusUrS9h8lWcEL8YQItiN_nQde4CvYthoHRdzyDxppj7iczl5fetXHvCqdelJFMkpoq-8T3d6QYom4S6RMXpnPWM4DzUAAdZ4rQuoyTK0ozgK9bcHTT947QOj3trLr8qpP4Ar2L5QeYkU6PAHifv_6sN28Ow-BxvCEt489Lzq4LgvdOf4jALONiE-DyvV8gwcY5U2zUOJuLTZ9ef4OxA0" />
                    </div>
                    <div class="card-body">
                        <h3 class="card-title">Especialización en Auditoría Forense</h3>
                        <ul class="info-list">
                            <li><i class="fa-solid fa-user"></i> Dra. Martha Quispe</li>
                            <li><i class="fa-solid fa-building"></i> Presencial / Híbrido</li>
                            <li><i class="fa-solid fa-clock"></i> 120 Horas Académicas</li>
                            <li><i class="fa-solid fa-certificate"></i> Postgrado / Diplomado</li>
                        </ul>
                        <div class="card-footer-custom">
                            <div>
                                <span class="price-label">Inversión</span>
                                <span class="price-value">S/ 1,200.00</span>
                            </div>
                            <button class="btn btn-inscribirme">Inscribirme</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Course 5 -->
            <div class="col-md-6 col-lg-4">
                <div class="card course-card">
                    <div class="card-img-container">
                        <img alt="Modernización" class="card-img-top" src="https://lh3.googleusercontent.com/aida-public/AB6AXuB1Kdw_31tXRI_GN50TkbmU3rPFsZVAcMtTrlZeg2uVt9OUIdMauSBi-g6iBDPiG9hBS1lUWtuvtLwiqR7Jk8MaaPKqWJQlJDwfMGHrPADixejUIWwvGJxptHnawVnyVaTRkVvURJFF-ndFm02oterBc790CQrenXx7FMsrJB5-ZTNZnPAFPaGXfYLTUZJcwVKkVR_4FOEiWrBLSxI1UWeWhCNGT3Zeq4sCszO7Qh1as4mpJXCrqbADvXSijlxJFsIBNzLziChYcU4" />
                        <span class="badge-popular">Popular</span>
                    </div>
                    <div class="card-body">
                        <h3 class="card-title">Modernización y Ética en el Estado</h3>
                        <ul class="info-list">
                            <li><i class="fa-solid fa-user"></i> Mag. Luis Mendoza</li>
                            <li><i class="fa-solid fa-circle-play"></i> Asincrónico (Grabado)</li>
                            <li><i class="fa-solid fa-clock"></i> 24 Horas Académicas</li>
                            <li><i class="fa-solid fa-certificate"></i> Certificación Digital</li>
                        </ul>
                        <div class="card-footer-custom">
                            <div>
                                <span class="price-label">Inversión</span>
                                <span class="price-value">S/ 250.00</span>
                            </div>
                            <button class="btn btn-inscribirme">Inscribirme</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Placeholder/Call to Action Card -->
            <div class="col-md-6 col-lg-4">
                <div class="card course-card card-placeholder text-center">
                    <div class="placeholder-icon pt-4">
                        <i class="fa-solid fa-graduation-cap fa-3x mb-3"></i>
                        <p class="fw-medium text-primary">Próximos lanzamientos en camino</p>
                    </div>
                    <div class="card-body">
                        <h3 class="card-title">¿No encuentras lo que buscas?</h3>
                        <p class="text-muted small mb-4">Suscríbete para recibir notificaciones sobre nuevos cursos especializados y diplomados.</p>
                        <button class="btn btn-outline-primary w-100 py-2 fw-bold mt-auto">Solicitar Información</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Newsletter CTA -->
<section class="newsletter-section">
    <div class="container">
        <h2 class="display-6 mb-3">Mantente a la vanguardia profesional</h2>
        <p class="opacity-75 lead mx-auto" style="max-width: 700px;">Únete a nuestra red de más de 5,000 profesionales capacitados y recibe contenido exclusivo sobre gestión pública y auditoría.</p>
        <div class="newsletter-form d-flex">
            <input class="form-control" placeholder="Tu correo electrónico" type="email" />
            <button class="btn btn-subscribe">Suscribirme</button>
        </div>
    </div>
</section>

@endsection


