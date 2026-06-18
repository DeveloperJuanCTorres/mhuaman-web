@extends('layouts.app')

@section('content')

<!-- Hero Section -->
<section class="hero-section">
    <img alt="Hero Background" class="hero-image" src="{{asset('storage/' . $nosotros->banner)}}" />
    <div class="hero-content px-3">
        <h1 class="display-3 fw-bold mb-3">{{ $nosotros->titulo }}</h1>
        <p class="fs-5 opacity-75">{{ $nosotros->subtitulo }}</p>
    </div>
</section>

<!-- History, Mission, Vision -->
<section class="py-5 my-lg-5">
    <div class="container-xl">
        <div class="row g-5 align-items-center mb-5 pb-lg-5">
            <div class="col-lg-6">
                <span class="text-uppercase fw-bold tracking-widest text-secondary mb-3 d-block" style="letter-spacing: 2px;">Nuestra Historia</span>
                <h2 class="display-6 fw-bold text-primary mb-4">{{ $nosotros->titulo_historia }}</h2>
                <p class="text-muted lead mb-4">
                    {!! $nosotros->descripcion_historia !!}
                </p>
            </div>
            <div class="col-lg-6">
                <div class="row g-4">
                    <div class="col-12">
                        <div class="premium-card">
                            <div class="d-flex align-items-center mb-3">
                                <i class="fa-solid fa-flag text-secondary fs-3 me-3"></i>
                                <h3 class="h4 mb-0 text-primary fw-bold">Misión</h3>
                            </div>
                            <p class="text-muted mb-0">{!! $nosotros->mision !!}</p>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="premium-card">
                            <div class="d-flex align-items-center mb-3">
                                <i class="fa-solid fa-eye text-secondary fs-3 me-3"></i>
                                <h3 class="h4 mb-0 text-primary fw-bold">Visión</h3>
                            </div>
                            <p class="text-muted mb-0">{!! $nosotros->vision !!}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Corporate Values -->
        <div class="text-center mb-5">
            <h2 class="display-6 fw-bold text-primary">Valores Corporativos</h2>
            <div style="width: 80px; height: 4px; background-color: var(--brand-secondary); margin: 20px auto;"></div>
        </div>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="value-card-primary">
                    <i class="fa-solid fa-shield-halved text-warning fs-1 mb-4"></i>
                    <h4 class="fw-bold mb-3">Integridad</h4>
                    <p class="opacity-75 mb-0">{{ $nosotros->integridad }}</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="value-card-surface border">
                    <i class="fa-solid fa-lightbulb text-primary fs-1 mb-4"></i>
                    <h4 class="fw-bold text-primary mb-3">Innovación</h4>
                    <p class="text-muted mb-0">{{ $nosotros->innovacion }}</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="value-card-gold">
                    <i class="fa-solid fa-users-gear text-dark fs-1 mb-4"></i>
                    <h4 class="fw-bold text-dark mb-3">Excelencia</h4>
                    <p class="text-dark opacity-75 mb-0">{{ $nosotros->excelencia }}</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Timeline Section -->
<section class="timeline-section">
    <div class="container-xl">

        <div class="text-center mb-5 pb-lg-4">
            <h2 class="display-6 fw-bold">Nuestra Evolución</h2>
            <p class="opacity-50 mt-3">
                Diez años de trayectoria marcando la diferencia.
            </p>
        </div>

        <div class="timeline-container mt-5">
            <div class="timeline-line"></div>

            @foreach($evolutions as $evolution)

                <div class="row align-items-center mb-5 position-relative">

                    @if($loop->odd)
                        <!-- Izquierda -->
                        <div class="col-md-6 text-md-end text-center pe-md-5">
                            <h3 class="display-6 fw-bold text-warning mb-2">
                                {{ $evolution->anio }}
                            </h3>

                            <p class="text-uppercase small fw-bold tracking-wider mb-3">
                                {{ $evolution->titulo }}
                            </p>

                            <p class="opacity-50">
                                {{ $evolution->descripcion }}
                            </p>
                        </div>

                        <div class="timeline-dot d-none d-md-block"></div>

                        <div class="col-md-6"></div>

                    @else
                        <!-- Derecha -->
                        <div class="col-md-6"></div>

                        <div class="timeline-dot d-none d-md-block"></div>

                        <div class="col-md-6 text-md-start text-center ps-md-5">
                            <h3 class="display-6 fw-bold text-warning mb-2">
                                {{ $evolution->anio }}
                            </h3>

                            <p class="text-uppercase small fw-bold tracking-wider mb-3">
                                {{ $evolution->titulo }}
                            </p>

                            <p class="opacity-50">
                                {{ $evolution->descripcion }}
                            </p>
                        </div>
                    @endif

                </div>

            @endforeach

        </div>
    </div>
</section>

<!-- Professional Team -->
<section class="py-5 my-lg-5">
    <div class="container-xl">
        <div class="text-center mb-5">
            <h2 class="display-6 fw-bold text-primary">Nuestro Equipo de Expertos</h2>
            <p class="text-muted mt-3">Un grupo selecto de profesionales dedicados a su éxito institucional.</p>
        </div>
        <div class="row g-4">
            @foreach($equipo as $item)
            <div class="col-lg-3 col-md-6">
                <div class="team-img-container">
                    <img alt="{{ $item->nombre }}" src="{{ asset('storage/' . $item->imagen) }}" />
                </div>
                <h5 class="fw-bold text-primary mb-1">{{ $item->nombre }}</h5>
                <p class="text-secondary small fw-bold text-uppercase">{{ $item->profesion }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-5 bg-light">
    <div class="container-xl">
        <div class="cta-container">
            <i class="fa-solid fa-building-columns cta-icon-bg"></i>
            <div class="row align-items-center position-relative">
                <div class="col-lg-8 mb-4 mb-lg-0 text-center text-lg-start">
                    <h2 class="display-6 fw-bold text-white mb-3">¿Listo para elevar su institución?</h2>
                    <p class="lead text-light opacity-75 mb-0">Únase a los líderes que ya confían en nuestra visión estratégica.</p>
                </div>
                <div class="col-lg-4 text-center text-lg-end">
                    <button class="btn btn-consultoria btn-lg">
                        Agendar Consultoría
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection


