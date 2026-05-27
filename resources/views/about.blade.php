@extends('layouts.app')

@section('content')

<!-- Hero Section -->
<section class="hero-section">
    <img alt="Hero Background" class="hero-image" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDtFuRbS1BOsB83CZp7cuR5L3Y9mEbHepFC84_2cRWd_Yt2ijw5Fj-GBUpGQj9vMqQsitOL2cdKN_9MBBKaWAUNOBqvvdCqixKDQpC7jM9M0z2NOfavAflmfS-R7DC6ZTXQkwzwT_X_MmW0NwLAa-sakdl3FqVo2rlkGxxnfanos0QTSGz8z-8rAfqi4Qa7yWOvXYcgVhElKj3LeRdBU72gRxM8UEEtreWV1qkO40Ma-vFbJ5SCY96ojK4byFn0uStRIfY0_pfXv14" />
    <div class="hero-content px-3">
        <h1 class="display-3 fw-bold mb-3">Nuestra Institución</h1>
        <p class="fs-5 opacity-75">Excelencia en auditoría y consultoría estratégica para el sector corporativo y educativo de alto nivel.</p>
    </div>
</section>
<!-- History, Mission, Vision -->
<section class="py-5 my-lg-5">
    <div class="container-xl">
        <div class="row g-5 align-items-center mb-5 pb-lg-5">
            <div class="col-lg-6">
                <span class="text-uppercase fw-bold tracking-widest text-secondary mb-3 d-block" style="letter-spacing: 2px;">Nuestra Historia</span>
                <h2 class="display-6 fw-bold text-primary mb-4">Décadas de integridad y visión estratégica.</h2>
                <p class="text-muted lead mb-4">
                    M HUAMAN nació de la visión de transformar el panorama de la consultoría en la región. Desde nuestros inicios, nos hemos comprometido con la rigurosidad académica y la eficacia corporativa, estableciendo puentes entre el conocimiento teórico y la práctica empresarial más exigente.
                </p>
                <p class="text-muted mb-0">
                    A lo largo de los años, hemos consolidado una reputación basada en la confianza y los resultados, asesorando a las instituciones más influyentes y formando a la próxima generación de líderes.
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
                            <p class="text-muted mb-0">Proveer servicios de auditoría y consultoría con los más altos estándares internacionales, impulsando el crecimiento sostenible de nuestros clientes a través del conocimiento especializado.</p>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="premium-card">
                            <div class="d-flex align-items-center mb-3">
                                <i class="fa-solid fa-eye text-secondary fs-3 me-3"></i>
                                <h3 class="h4 mb-0 text-primary fw-bold">Visión</h3>
                            </div>
                            <p class="text-muted mb-0">Ser reconocidos como la firma referente en consultoría estratégica y formación ejecutiva en América Latina, liderando la innovación y la ética profesional.</p>
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
                    <p class="opacity-75 mb-0">Actuamos con honestidad y transparencia en cada proceso de auditoría.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="value-card-surface border">
                    <i class="fa-solid fa-lightbulb text-primary fs-1 mb-4"></i>
                    <h4 class="fw-bold text-primary mb-3">Innovación</h4>
                    <p class="text-muted mb-0">Buscamos constantemente nuevas metodologías para optimizar el rendimiento institucional.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="value-card-gold">
                    <i class="fa-solid fa-users-gear text-dark fs-1 mb-4"></i>
                    <h4 class="fw-bold text-dark mb-3">Excelencia</h4>
                    <p class="text-dark opacity-75 mb-0">Nuestra dedicación al detalle nos permite superar las expectativas de los clientes más exigentes.</p>
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
            <p class="opacity-50 mt-3">Diez años de trayectoria marcando la diferencia.</p>
        </div>
        <div class="timeline-container mt-5">
            <div class="timeline-line"></div>
            <!-- 2014 -->
            <div class="row align-items-center mb-5 position-relative">
                <div class="col-md-6 text-md-end text-center pe-md-5">
                    <h3 class="display-6 fw-bold text-warning mb-2">2014</h3>
                    <p class="text-uppercase small fw-bold tracking-wider mb-3">Fundación de M HUAMAN</p>
                    <p class="opacity-50">Iniciamos nuestras operaciones enfocados en auditoría financiera para instituciones educativas locales.</p>
                </div>
                <div class="timeline-dot d-none d-md-block"></div>
                <div class="col-md-6"></div>
            </div>
            <!-- 2018 -->
            <div class="row align-items-center mb-5 position-relative">
                <div class="col-md-6"></div>
                <div class="timeline-dot d-none d-md-block"></div>
                <div class="col-md-6 text-md-start text-center ps-md-5">
                    <h3 class="display-6 fw-bold text-warning mb-2">2018</h3>
                    <p class="text-uppercase small fw-bold tracking-wider mb-3">Expansión Regional</p>
                    <p class="opacity-50">Apertura de nuestra división de consultoría estratégica y lanzamiento de los primeros programas internacionales.</p>
                </div>
            </div>
            <!-- 2021 -->
            <div class="row align-items-center mb-5 position-relative">
                <div class="col-md-6 text-md-end text-center pe-md-5">
                    <h3 class="display-6 fw-bold text-warning mb-2">2021</h3>
                    <p class="text-uppercase small fw-bold tracking-wider mb-3">Transformación Digital</p>
                    <p class="opacity-50">Implementación del Aula Virtual y digitalización completa de los servicios de asesoría.</p>
                </div>
                <div class="timeline-dot d-none d-md-block"></div>
                <div class="col-md-6"></div>
            </div>
            <!-- 2024 -->
            <div class="row align-items-center position-relative">
                <div class="col-md-6"></div>
                <div class="timeline-dot d-none d-md-block"></div>
                <div class="col-md-6 text-md-start text-center ps-md-5">
                    <h3 class="display-6 fw-bold text-warning mb-2">2024</h3>
                    <p class="text-uppercase small fw-bold tracking-wider mb-3">Liderazgo Institucional</p>
                    <p class="opacity-50">Consolidación como firma de confianza para más de 50 corporaciones multinacionales.</p>
                </div>
            </div>
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
            <!-- Team Member 1 -->
            <div class="col-lg-3 col-md-6">
                <div class="team-img-container">
                    <img alt="Miguel Huamán" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCx6Qcq-9mC1IjGWFFZ0Qe_14rYyTRi-M7toKU8iVGf2PAFFoIw3ImzukEUIh2wiBgj0zzHfyCOTPVUVB-GksJeQ70tYSGC9zjTTa87b_nYMdywEPnM63OQ5QYDv7nVWP-h2wVQR5li3LIBy2pRTjj3SY5Wws2lYQ-0mwToMU2GTiu_JUK9bWmqblsbEntR408sNTkx1pRZAJ5YvEdCLKNkMuFiAmUdNQ7tNL6jD-2G5cZMU3IEuZlWBDGTSzAFNl9Xu-gQA7XCL14" />
                </div>
                <h5 class="fw-bold text-primary mb-1">Dr. Miguel Huamán</h5>
                <p class="text-secondary small fw-bold text-uppercase">Fundador &amp; CEO</p>
            </div>
            <!-- Team Member 2 -->
            <div class="col-lg-3 col-md-6">
                <div class="team-img-container">
                    <img alt="Elena Rossi" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBkTziMkgLcnUHUmdiL-MjesXIjiDMkzFt_nqlN-WJm_ZM45iJKhiAAVofIRHn3ytItjZn0LX1cw1Xr7X7Gyz81dIMyyD19z1Byjo-KQ_dNWscpFFDpJKTpZ_MrxQmBoepkdT96Rc0MYk_lawX9hsF2Nu_5sGvkLtLP7iLoKdeZIPpPhkkucZsMVp7V35q39_vU6-OeIKsycvVv9Sro_EyNhr9sJi_Sx5ZGYDY8yCAq0SrNwE491PJ_UhgUYuLkAed3eppJSuaexJA" />
                </div>
                <h5 class="fw-bold text-primary mb-1">Dra. Elena Rossi</h5>
                <p class="text-secondary small fw-bold text-uppercase">Directora de Auditoría</p>
            </div>
            <!-- Team Member 3 -->
            <div class="col-lg-3 col-md-6">
                <div class="team-img-container">
                    <img alt="Carlos Méndez" src="https://lh3.googleusercontent.com/aida-public/AB6AXuApPe29OLdHHyGeUGN-qF8lUFrF0ZUnkaEbEjKpyh_xWWTYJqLT060lhFKM4GfGRVPoTgUdHhLYPXlRdra9PlC5M-2THeuXERZsHbHjXf4tuu0CcJ6w2RWzD7ejjMqbS9Um7r3Aw_nDPY0Hu5YbYMxdx34_n_4kNZoocS-yfyh2IxaP3QrlKpWliaTKA7Wn6DLQIfGWMK70bwlIEWF2Tnae43tkt4HZcEiQobb7iCIIeo6eMUXABrdcAFSu-wzXIhcViulliLYP0E0" />
                </div>
                <h5 class="fw-bold text-primary mb-1">Mag. Carlos Méndez</h5>
                <p class="text-secondary small fw-bold text-uppercase">Consultor Estratégico</p>
            </div>
            <!-- Team Member 4 -->
            <div class="col-lg-3 col-md-6">
                <div class="team-img-container">
                    <img alt="Sofía Valenzuela" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCgaxBoz1cHqzHXHe-gA2gDoM_Z4u4cWLwRhPaaQq_5tsTuHWnqJLwbhodCr24QmVHvBQejvLkvkZFNqkOJJ89TwvJ0tK6Z7VHC3TaAMkKniaz0pdfZ_oArpEAce3PKk-MB5AK2sc9N8hE3JNv-gM-vl66TTnAGgSeijYhzBBJsf8zR9dYp3dZKOT6WBucnuBUdyi5Na6i93_E7TpEwguARGrYWhVTeGzLdBpdVBpVBO4mveFkUMSAS7eQA3SlI7IRy2rCCcE3o3GQ" />
                </div>
                <h5 class="fw-bold text-primary mb-1">Dra. Sofía Valenzuela</h5>
                <p class="text-secondary small fw-bold text-uppercase">Especialista en Calidad</p>
            </div>
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


