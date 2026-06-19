@extends('layouts.app')

@section('content')

<!-- Hero -->
<section class="hero-section-cursos text-center">
    <div class="hero-blur"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <h1 class="display-4 fw-bold mb-4">Alianzas Estratégicas para la Excelencia</h1>
                <p class="lead opacity-75">Colaboramos con las instituciones líderes del sector público y privado, fortaleciendo la gobernanza y la transparencia a través de procesos de auditoría de clase mundial.</p>
            </div>
        </div>
    </div>
</section>
<!-- Logo Carousel -->
<section class="logo-carousel">
    <div class="container mb-4">
        <p class="text-center text-uppercase fw-bold text-muted small ls-wider" style="letter-spacing: 0.2em;">Confían en nuestra experiencia</p>
    </div>
    <div class="logo-track">
        @foreach($clientes as $cliente)
        <div class="logo-item">
            <img src="{{asset('storage/' . $cliente->imagen)}}" width="100" alt="">
        </div>
        @endforeach
    </div>
</section>
<!-- Stats Bento -->
<section class="py-5 mt-5">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-8">
                <div class="stats-card-main">
                    <div class="row h-100">
                        <div class="col-md-7">
                            <h3 class="mb-3">Impacto en Control Interno</h3>
                            <p class="opacity-75">Hemos optimizado los marcos normativos de más de 150 entidades, reduciendo riesgos operativos en un promedio del 40% anual.</p>
                        </div>
                        <div class="col-md-5 d-flex flex-column justify-content-end align-items-end">
                            <div class="d-flex align-items-end gap-2 mb-4">
                                <div class="chart-bar" style="height: 60px;"></div>
                                <div class="chart-bar" style="height: 100px;"></div>
                                <div class="chart-bar" style="height: 40px;"></div>
                                <div class="chart-bar" style="height: 120px; background-color: var(--secondary-container);"></div>
                            </div>
                            <div class="text-end">
                                <div class="display-4 fw-bold">98%</div>
                                <p class="small text-uppercase opacity-75 mb-0">Satisfacción General</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="stats-card-circle">
                    <div class="position-relative mb-4">
                        <svg height="150" width="150">
                            <circle cx="75" cy="75" fill="none" r="65" stroke="#e1e3e4" stroke-width="12"></circle>
                            <circle cx="75" cy="75" fill="none" r="65" stroke="var(--primary)" stroke-dasharray="408.4" stroke-dashoffset="61.2" stroke-width="12"></circle>
                        </svg>
                        <div class="position-absolute top-50 start-50 translate-middle">
                            <span class="h2 fw-bold text-primary">85%</span>
                        </div>
                    </div>
                    <h4 class="text-primary">Retención de Clientes</h4>
                    <p class="text-muted small">Instituciones que mantienen servicios recurrentes anuales.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Cases Grid -->
<section class="py-5">
    <div class="container">
        <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-end mb-5">
            <div>
                <span class="text-secondary fw-bold text-uppercase small ls-wider">Portafolio</span>
                <h2 class="display-5 fw-bold text-primary">Casos de Éxito Detallados</h2>
            </div>
            <a class="btn btn-outline-primary px-4 py-2 mt-3 mt-md-0 rounded-pill fw-bold" href="#">Ver Todos los Casos</a>
        </div>
        <div class="row g-5">
            <!-- Case 1 -->
            <div class="col-md-6">
                <div class="case-card mb-4">
                    <img alt="Sector Público" class="case-img" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDIac1CCIU9Sq2P9BcSY47Lb2wZpZzsskFlB5rwfifCAYCxtMZs2KnGHiKR5bmaaHznqUBujDsw-R51cfBXQI43bxvtHLNwnKyyCkrfuvW5vU7_iZI-41uBw1PXm5ZtbQekNzCf4lrG71NSrNg1_RGWTY8ICNqPf8KmpV2sYrnTCPoVOFinw1Vtk73GnlnUh6pk_pEY_IUAwKqvz-pC1SXEfbfCWivez0TZ-CCSLa1AV6UgUgrAeNtZteNDiZoDHWKUEQhSJ-BVWbI" />
                    <div class="case-overlay">
                        <span class="badge-case">Control Interno</span>
                        <h3 class="h4 fw-bold">Modernización de la Gestión Municipal</h3>
                        <div class="d-flex align-items-center gap-2 small opacity-75">
                            <span>Ver detalle</span>
                            <i class="fa-solid fa-arrow-right-long"></i>
                        </div>
                    </div>
                </div>
                <p class="text-muted">Implementación de un sistema integral de auditoría continua en una municipalidad metropolitana, logrando la detección preventiva de riesgos en un 92% de los procesos críticos administrativos.</p>
            </div>
            <!-- Case 2 -->
            <div class="col-md-6">
                <div class="case-card mb-4">
                    <img alt="Auditoría Corporativa" class="case-img" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDIac1CCIU9Sq2P9BcSY47Lb2wZpZzsskFlB5rwfifCAYCxtMZs2KnGHiKR5bmaaHznqUBujDsw-R51cfBXQI43bxvtHLNwnKyyCkrfuvW5vU7_iZI-41uBw1PXm5ZtbQekNzCf4lrG71NSrNg1_RGWTY8ICNqPf8KmpV2sYrnTCPoVOFinw1Vtk73GnlnUh6pk_pEY_IUAwKqvz-pC1SXEfbfCWivez0TZ-CCSLa1AV6UgUgrAeNtZteNDiZoDHWKUEQhSJ-BVWbI" />
                    <div class="case-overlay">
                        <span class="badge-case">Auditoría Financiera</span>
                        <h3 class="h4 fw-bold">Optimización de Estados Financieros</h3>
                        <div class="d-flex align-items-center gap-2 small opacity-75">
                            <span>Ver detalle</span>
                            <i class="fa-solid fa-arrow-right-long"></i>
                        </div>
                    </div>
                </div>
                <p class="text-muted">Auditoría externa para un holding regional del sector logístico, asegurando el cumplimiento normativo internacional y facilitando una inversión de capital extranjero de $50M.</p>
            </div>
        </div>
    </div>
</section>
<!-- Testimonials -->
<section class="testimonials-section">
    <div class="container">
        <div class="text-center mb-5">
            <i class="fa-solid fa-quote-right display-1 text-secondary mb-4 opacity-50"></i>
            <h2 class="display-5 fw-bold">Lo que dicen nuestros aliados estratégicos</h2>
        </div>
        <div class="row g-4 justify-content-center">
            <div class="col-lg-5">
                <div class="testimonial-card">
                    <p class="fst-italic lead mb-5 opacity-90">"La precisión técnica y el rigor académico de M HUAMAN han transformado nuestra visión del control interno. No son solo auditores, son arquitectos de integridad organizacional."</p>
                    <div class="d-flex align-items-center gap-3">
                        <div class="bg-light text-primary fw-bold rounded-circle d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">DR</div>
                        <div>
                            <div class="fw-bold">Dr. Ricardo Valdez</div>
                            <div class="small opacity-50">Director de Cumplimiento - Banco Regional</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="testimonial-card">
                    <p class="fst-italic lead mb-5 opacity-90">"Encontramos en su consultoría la claridad necesaria para navegar procesos públicos complejos. Su enfoque en la transparencia es un referente en el sector público."</p>
                    <div class="d-flex align-items-center gap-3">
                        <div class="bg-light text-primary fw-bold rounded-circle d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">MS</div>
                        <div>
                            <div class="fw-bold">Mag. Sofía Montenegro</div>
                            <div class="small opacity-50">Gerente General - Entidad Gubernamental</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- CTA -->
<section class="py-5 my-5">
    <div class="container text-center">
        <div class="cta-box">
            <h2 class="display-5 fw-bold text-primary mb-5">¿Listo para elevar sus estándares institucionales?</h2>
            <div class="d-flex flex-column flex-sm-row gap-3 justify-content-center">
                <a href="{{ route('consultoria') }}" class="btn btn-aula px-5 py-3">Solicitar Consultoría</a>
                <!-- <button class="btn btn-outline-primary px-5 py-3 rounded-3 fw-bold">Ver Servicios</button> -->
            </div>
        </div>
    </div>
</section>

@endsection

