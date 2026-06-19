@extends('layouts.app')

@section('content')

<!-- Hero Section Carousel -->
<section class="carousel slide" data-bs-ride="carousel" id="heroCarousel">
    <div class="carousel-indicators">
        <button class="active" data-bs-slide-to="0" data-bs-target="#heroCarousel" type="button"></button>
        <button data-bs-slide-to="1" data-bs-target="#heroCarousel" type="button"></button>
        <button data-bs-slide-to="2" data-bs-target="#heroCarousel" type="button"></button>
    </div>
    <div class="carousel-inner">

        @foreach($banners as $banner)
            <div class="carousel-item {{ $loop->first ? 'active' : '' }}">

                <img
                    src="{{ asset('storage/' . $banner->imagen) }}"
                    alt="{{ $banner->titulo }}"
                    class="carousel-image"
                >

                <div class="container hero-content">
                    <div class="col-lg-7">
                        <h1 class="display-3 fw-bold mb-4">
                            {{ $banner->titulo }}
                        </h1>

                        <p class="lead mb-5 opacity-75">
                            {{ $banner->subtitulo }}
                        </p>

                        <div class="d-flex flex-wrap gap-3">
                            <a href="{{ route('cursos') }}" class="btn btn-gold">
                                Ver Cursos
                            </a>

                            <a href="{{ route('about') }}" class="btn btn-outline-gold">
                                Solicitar Información
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        @endforeach

    </div>
    <button class="carousel-control-prev" data-bs-slide="prev" data-bs-target="#heroCarousel" type="button">
        <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" data-bs-slide="next" data-bs-target="#heroCarousel" type="button">
        <span class="carousel-control-next-icon"></span>
    </button>
</section>
<!-- Benefits Bento Grid -->
<section class="section-padding container">
    <div class="text-center mb-5 pb-3">
        <span class="section-title-tag">Excelencia Educativa</span>
        <h2 class="display-5 fw-bold text-dark-blue">Beneficios de Formarte con Nosotros</h2>
    </div>
    <div class="row g-4">
        <div class="col-md-6 col-lg-8">
            <div class="benefit-card d-flex flex-column justify-content-between">
                <div>
                    <i class="fa-solid fa-circle-check"></i>
                    <h3 class="h2 mb-3">Certificación Oficial</h3>
                    <p class="text-muted fs-5">{{ $beneficio->certificacion }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-4">
            <div class="benefit-card">
                <i class="fa-solid fa-user-tie"></i>
                <h3 class="h4 mb-3">Expertos</h3>
                <p class="text-muted">{{ $beneficio->expertos }}</p>
            </div>
        </div>
        <div class="col-md-6 col-lg-4">
            <div class="benefit-card">
                <i class="fa-solid fa-display"></i>
                <h3 class="h4 mb-3">Clases Virtuales</h3>
                <p class="text-muted">{{ $beneficio->clases }}</p>
            </div>
        </div>
        <div class="col-md-6 col-lg-8">
            <div class="benefit-card bg-dark-blue text-white border-0 d-flex align-items-center gap-4">
                <div class="bg-white bg-opacity-10 p-4 rounded-circle">
                    <i class="fa-solid fa-headset text-gold m-0"></i>
                </div>
                <div>
                    <h3 class="h2 mb-2 text-white">Soporte Continuo</h3>
                    <p class="opacity-75 mb-0">{{ $beneficio->soporte }}</p>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="p-5 rounded-4 bg-surface-container text-center border">
                <p class="display-6 fw-bold text-primary mb-0 font-lexend italic">"Liderando la formación en auditoría con rigor académico."</p>
            </div>
        </div>
    </div>
</section>
<!-- Featured Courses -->
<section class="section-padding bg-surface-container">
    <div class="container">
        <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-end mb-5 gap-3">
            <div>
                <span class="section-title-tag">Nuestros Programas</span>
                <h2 class="display-5 fw-bold text-dark-blue">Cursos Especializados</h2>
            </div>
            <a class="text-dark-blue fw-bold text-decoration-none border-bottom border-dark border-2 pb-1" href="{{route('cursos')}}">Ver todo el catálogo</a>
        </div>
        <div class="row g-4">
            @foreach($cursos as $curso)
            <div class="col-md-6 col-lg-4"
                data-nombre="{{ mb_strtolower($curso->nombre, 'UTF-8') }}"
                data-categoria="{{ $curso->taxonomy_id }}">

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
        </div>
    </div>
</section>
<!-- Testimonials -->
<section class="section-padding">
    <div class="container text-center">
        <h2 class="display-5 fw-bold text-dark-blue mb-5">Voces de Nuestra Comunidad</h2>
        <div class="row g-4 text-start">
            <div class="col-lg-6">
                <div class="testimonial-card1">
                    <i class="fa-solid fa-quote-left quote-icon"></i>
                    <p class="fs-5 mb-5 fst-italic">"La metodología aplicada por M HUAMAN superó mis expectativas. Logré implementar controles clave en mi organización inmediatamente después del curso de especialización."</p>
                    <div class="d-flex align-items-center gap-3">
                        <div class="rounded-circle bg-secondary-subtle" style="width: 60px; height: 60px;"></div>
                        <div>
                            <div class="fw-bold">Carlos Rodriguez</div>
                            <div class="small text-muted">Auditor Senior - Global Corp</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="testimonial-card1">
                    <i class="fa-solid fa-quote-left quote-icon"></i>
                    <p class="fs-5 mb-5 fst-italic">"Excelente nivel académico. Los consultores dominan la normativa gubernamental a la perfección. Es una inversión segura para cualquier profesional del sector."</p>
                    <div class="d-flex align-items-center gap-3">
                        <div class="rounded-circle bg-secondary-subtle" style="width: 60px; height: 60px;"></div>
                        <div>
                            <div class="fw-bold">Ana Valdivia</div>
                            <div class="small text-muted">Gerente de Control - Sector Público</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Clients Grid -->
<section class="logo-carousel bg-white">
    <div class="container mb-4">
        <p class="text-center text-uppercase fw-bold text-muted small ls-wider" style="letter-spacing: 0.2em;">Empresas que confían en nosotros</p>
    </div>
    <div class="logo-track">
        @foreach($clientes as $cliente)
        <div class="logo-item">
            <img src="{{asset('storage/' . $cliente->imagen)}}" width="100" alt="">
        </div>
        @endforeach
    </div>
</section>

<!-- Final CTA -->
<section class="section-padding container">
    <div class="bg-dark-blue rounded-5 p-5 p-lg-5 text-center text-white position-relative overflow-hidden shadow-lg">
        <!-- Decorative Blurs -->
        <div class="position-absolute bg-gold opacity-10 rounded-circle" style="width: 300px; height: 300px; top: -150px; right: -150px; filter: blur(100px);"></div>
        <div class="position-absolute bg-gold opacity-5 rounded-circle" style="width: 300px; height: 300px; bottom: -150px; left: -150px; filter: blur(100px);"></div>
        <h2 class="display-4 fw-bold mb-4 position-relative">¿Listo para alcanzar el siguiente nivel en tu carrera profesional?</h2>
        <p class="fs-5 opacity-75 mb-5 position-relative">Únete a cientos de profesionales certificados y transforma tu futuro con M HUAMAN.</p>
        <div class="d-flex flex-column flex-sm-row justify-content-center gap-3 position-relative">
            <a href="{{ route('cursos') }}" class="btn btn-gold btn-lg rounded-3">Ver Cursos</a>
            <a href="{{ route('consultoria') }}" class="btn btn-outline-gold btn-lg rounded-3">Solicitar Consultoría</a>
        </div>
    </div>
</section>

@endsection



