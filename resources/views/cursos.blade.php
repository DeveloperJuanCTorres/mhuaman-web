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
            @foreach($cursos as $curso)
            <div class="col-md-6 col-lg-4">
                <div class="card course-card">
                    <div class="card-img-container">
                        <img alt="Auditoría Financiera" class="card-img-top" src="{{asset ('storage/' . $curso->imagen)}}" />
                        <span class="badge-new">Nuevo</span>
                    </div>
                    <div class="card-body">
                        <h3 class="card-title">{{$curso->nombre}}</h3>
                        <ul class="info-list">
                            <li><i class="fa-solid fa-user"></i> {{ $curso->specialist->degree->abreviatura }} {{ $curso->specialist->nombre }}</li>
                            <li><i class="fa-solid fa-laptop"></i> Virtual (Grabado)</li>
                            <li><i class="fa-solid fa-clock"></i> {{$curso->horas}} Horas Académicas</li>
                            <li><i class="fa-solid fa-certificate"></i> Certificación</li>
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
            @endforeach
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


