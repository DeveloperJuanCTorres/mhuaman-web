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
        <!-- Slide 1 -->
        <div class="carousel-item active">
            <img alt="Auditoría" class="carousel-image" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCxKUZVzQkYAHRQ_9lMNxvs3cvHPpko7WSSrAYQakYoiLC5LVvHwG9fxmKbjTjYE2KP4AI2heiUr63cUZmdg8W1c-BwreyCs0OMYUT0xwRzqQqOQTscWjIxhSe-x5ba6TezCSAi8_BoZkocW-P_Kpq1lO9VZgn2dqxW3J8XrVz1VmZOjSLt7vzBn_o1UswIKuaD_H0C2wo-HLDXN3YqqCTntiSveg-Nz3vd2LXGxFdlEBTqbF_nL4J8A_894Ew6NJXNcF-DfDSA7Jc" />
            <div class="container hero-content">
                <div class="col-lg-7">
                    <h1 class="display-3 fw-bold mb-4">Líderes en Auditoría y Control Interno</h1>
                    <p class="lead mb-5 opacity-75">Elevamos los estándares profesionales a través de programas educativos de élite y asesoría técnica especializada para el sector público y privado.</p>
                    <div class="d-flex flex-wrap gap-3">
                        <button class="btn btn-gold">Ver Cursos</button>
                        <button class="btn btn-outline-gold">Solicitar Información</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Slide 2 -->
        <div class="carousel-item">
            <img alt="Capacitación" class="carousel-image" src="https://lh3.googleusercontent.com/aida-public/AB6AXuB_0EMhMRuJFLSonMk_Pa33SX8v9qSs7caHiLytxmDnfh8vi-eonhJY_pyazq3o0_Nlbw9f-GOL8WZP7fzfpGb_vafTvlOLjKB_TlusLBDHFjohF62c7IYslE0dbifGeVU9udLgkbkumeNX4TcdT7YwnDHE4-Penwcfyuxus-lSig4VAI34uK_UuF60VxgqEHQhxmIBwvYKsFtQ8-aSWTZsHYNqvIUgZrtvNif55U72jofvCLjS0G_5B2JV1DYChyZWTFitbASqVM4" />
            <div class="container hero-content">
                <div class="col-lg-7">
                    <h1 class="display-3 fw-bold mb-4">Capacitación Especializada de Alto Impacto</h1>
                    <p class="lead mb-5 opacity-75">Programas de especialización diseñados por expertos con amplia experiencia en control gubernamental y normativas internacionales.</p>
                    <div class="d-flex flex-wrap gap-3">
                        <button class="btn btn-gold">Ver Cursos</button>
                        <button class="btn btn-outline-gold">Solicitar Información</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Slide 3 -->
        <div class="carousel-item">
            <img alt="Consultoría" class="carousel-image" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCuWVou1yikj4bfcFoeklYd4TtHSOBMEXympFdFz_zQr3PG_-gMNt4DXn0LXuNuBk4Fwr_951B4_ccpG0RoJ6MkGME9mUv9xTevsXWztFL6AMSWMbqBOfl1DBZfTzIjzeizCbTy-OmxTViHp-CV38zuWjqDiDDfeHMRQymjCuErxOgtdi38rY3HOzl_8KlurUtPGXRa309sQ-ZXeEJ8Wma6vhfrq52ppxgzXsRuKMfoSXsTP-hnurlBxummIgEcNNNwWBSEmQDPqto" />
            <div class="container hero-content">
                <div class="col-lg-7">
                    <h1 class="display-3 fw-bold mb-4">Consultoría Estratégica para el Crecimiento</h1>
                    <p class="lead mb-5 opacity-75">Asesoramos a su organización en la gestión de riesgos corporativos y optimización de procesos operativos bajo estándares COSO.</p>
                    <div class="d-flex flex-wrap gap-3">
                        <button class="btn btn-gold">Ver Cursos</button>
                        <button class="btn btn-outline-gold">Solicitar Información</button>
                    </div>
                </div>
            </div>
        </div>
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
                    <p class="text-muted fs-5">Programas avalados con valor curricular que potencian tu perfil profesional en el mercado global.</p>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-4">
            <div class="benefit-card">
                <i class="fa-solid fa-user-tie"></i>
                <h3 class="h4 mb-3">Expertos</h3>
                <p class="text-muted">Plana docente conformada por líderes en auditoría y control gubernamental.</p>
            </div>
        </div>
        <div class="col-md-6 col-lg-4">
            <div class="benefit-card">
                <i class="fa-solid fa-display"></i>
                <h3 class="h4 mb-3">Clases Virtuales</h3>
                <p class="text-muted">Acceso 24/7 a nuestra plataforma interactiva desde cualquier dispositivo.</p>
            </div>
        </div>
        <div class="col-md-6 col-lg-8">
            <div class="benefit-card bg-dark-blue text-white border-0 d-flex align-items-center gap-4">
                <div class="bg-white bg-opacity-10 p-4 rounded-circle">
                    <i class="fa-solid fa-headset text-gold m-0"></i>
                </div>
                <div>
                    <h3 class="h2 mb-2 text-white">Soporte Continuo</h3>
                    <p class="opacity-75 mb-0">Asesoría técnica y acompañamiento durante todo tu proceso de aprendizaje.</p>
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
            <a class="text-dark-blue fw-bold text-decoration-none border-bottom border-dark border-2 pb-1" href="#">Ver todo el catálogo</a>
        </div>
        <div class="row g-4">
            <!-- Course 1 -->
            <div class="col-md-4">
                <div class="course-card">
                    <div class="course-img-container">
                        <img alt="Auditoría Forense" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBwkLBF-Ng12OoeTcKaT3LKeu4CNXpOIchphS1xNCjpdYSAQIx23waiSEdfzgmehZME0_TBF0T3QJiXlD32mhO2ZM3GoqsL0K1wOMxNqkJxmr1lnE_GOzLVZOI4nFlCBuf22Wv1HRM8OPM4KlccliElImXIggeMLfr_VP_zD9DsRn7_ganwxxMEsow-90SxqiGC4Yr4fqtPAOfpEMTr7UjvFrVZLJvQ8y4uxLA9taVRB71JflfOgjJnLWdue6Ih80Vn5ihCLjTBDes" />
                        <span class="course-badge">Modalidad Virtual</span>
                    </div>
                    <div class="p-4">
                        <h3 class="h4 fw-bold mb-4">Auditoría Forense y Prevención de Fraude</h3>
                        <div class="d-flex gap-4 text-muted mb-4 border-bottom pb-3">
                            <div class="small d-flex align-items-center gap-1"><i class="fa-regular fa-clock"></i> 60 Horas</div>
                            <div class="small d-flex align-items-center gap-1"><i class="fa-solid fa-award"></i> Especialización</div>
                        </div>
                        <button class="btn btn-dark-blue w-100 py-3">Más Información</button>
                    </div>
                </div>
            </div>
            <!-- Course 2 -->
            <div class="col-md-4">
                <div class="course-card">
                    <div class="course-img-container">
                        <img alt="Control Interno" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCuWVou1yikj4bfcFoeklYd4TtHSOBMEXympFdFz_zQr3PG_-gMNt4DXn0LXuNuBk4Fwr_951B4_ccpG0RoJ6MkGME9mUv9xTevsXWztFL6AMSWMbqBOfl1DBZfTzIjzeizCbTy-OmxTViHp-CV38zuWjqDiDDfeHMRQymjCuErxOgtdi38rY3HOzl_8KlurUtPGXRa309sQ-ZXeEJ8Wma6vhfrq52ppxgzXsRuKMfoSXsTP-hnurlBxummIgEcNNNwWBSEmQDPqto" />
                        <span class="course-badge">En Vivo</span>
                    </div>
                    <div class="p-4">
                        <h3 class="h4 fw-bold mb-4">Gestión de Riesgos y Control Interno (COSO 2013)</h3>
                        <div class="d-flex gap-4 text-muted mb-4 border-bottom pb-3">
                            <div class="small d-flex align-items-center gap-1"><i class="fa-regular fa-clock"></i> 45 Horas</div>
                            <div class="small d-flex align-items-center gap-1"><i class="fa-solid fa-award"></i> Diplomado</div>
                        </div>
                        <button class="btn btn-dark-blue w-100 py-3">Más Información</button>
                    </div>
                </div>
            </div>
            <!-- Course 3 -->
            <div class="col-md-4">
                <div class="course-card border-top border-gold border-4">
                    <div class="course-img-container">
                        <img alt="Control Gubernamental" src="https://lh3.googleusercontent.com/aida-public/AB6AXuB_0EMhMRuJFLSonMk_Pa33SX8v9qSs7caHiLytxmDnfh8vi-eonhJY_pyazq3o0_Nlbw9f-GOL8WZP7fzfpGb_vafTvlOLjKB_TlusLBDHFjohF62c7IYslE0dbifGeVU9udLgkbkumeNX4TcdT7YwnDHE4-Penwcfyuxus-lSig4VAI34uK_UuF60VxgqEHQhxmIBwvYKsFtQ8-aSWTZsHYNqvIUgZrtvNif55U72jofvCLjS0G_5B2JV1DYChyZWTFitbASqVM4" />
                        <span class="course-badge bg-gold text-dark">Premium</span>
                    </div>
                    <div class="p-4">
                        <h3 class="h4 fw-bold mb-4">Control Gubernamental y Normas de Auditoría (ISSAI)</h3>
                        <div class="d-flex gap-4 text-muted mb-4 border-bottom pb-3">
                            <div class="small d-flex align-items-center gap-1"><i class="fa-regular fa-clock"></i> 80 Horas</div>
                            <div class="small d-flex align-items-center gap-1"><i class="fa-solid fa-award"></i> Certificación</div>
                        </div>
                        <button class="btn btn-gold w-100 py-3">Matricularse Ahora</button>
                    </div>
                </div>
            </div>
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
<section class="py-5 bg-white">
    <div class="container">
        <p class="text-center small text-uppercase tracking-wider text-muted mb-5">Empresas que confían en nosotros</p>
        <div class="row row-cols-2 row-cols-md-5 g-5 align-items-center justify-content-center opacity-50 grayscale">
            <div class="col">
                <div class="bg-light rounded p-4 text-center">CLIENTE 1</div>
            </div>
            <div class="col">
                <div class="bg-light rounded p-4 text-center">CLIENTE 2</div>
            </div>
            <div class="col">
                <div class="bg-light rounded p-4 text-center">CLIENTE 3</div>
            </div>
            <div class="col">
                <div class="bg-light rounded p-4 text-center">CLIENTE 4</div>
            </div>
            <div class="col">
                <div class="bg-light rounded p-4 text-center">CLIENTE 5</div>
            </div>
        </div>
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
            <button class="btn btn-gold btn-lg rounded-3">Inscribirme Ahora</button>
            <button class="btn btn-outline-gold btn-lg rounded-3">Hablar con un Asesor</button>
        </div>
    </div>
</section>

@endsection



