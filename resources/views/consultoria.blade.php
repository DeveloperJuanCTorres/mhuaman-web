@extends('layouts.app')

@section('content')

<!-- Hero Section -->
<section class="hero-section">
    <img alt="Modern corporate facade" class="hero-bg-img" src="https://lh3.googleusercontent.com/aida-public/AB6AXuD_XlqEdppsj6jj9XfG23QzrJHtTl2bMxkMZMqh44M_nSKIzKukFv7lGAQzrnuQLcrD2gao6ek_X2LeAZptlJ3yMBQ9F7v1EbKFpGkTA-9ZUzUGdNracxFBSa2d1Gmi_th12DvDz4H1tjB-EYR1hMBIIF49sYCVukK1YAcnD6NGNuNR9hkVCGkBZwurMow0cib7t8r7VckcZBD1mXHE4ETrit_XD5e5h-6Aw1EQ3yk9eUHRc5rIsOG4iJmLNEQCKWtCYyXHPCKCTTg" />
    <div class="container position-relative">
        <div class="row">
            <div class="col-lg-7">
                <h1 class="display-4 mb-4">Consultoría Estratégica para la Excelencia Institucional</h1>
                <p class="lead mb-5 opacity-75">Fortalecemos la integridad y eficiencia de su organización a través de servicios especializados de auditoría y asesoría técnica con estándares internacionales.</p>
                <div class="d-flex flex-wrap gap-3">
                    <button class="btn btn-primary py-3 px-4" style="background-color: #007BFF; border: none;">Solicitar Asesoría</button>
                    <button class="btn btn-outline-light py-3 px-4">Nuestros Servicios</button>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Portfolio Section -->
<section class="py-5 bg-light">
    <div class="container py-5">
        <div class="text-center mb-5">
            <span class="text-secondary text-uppercase fw-bold tracking-wider">Expertos en Control</span>
            <h2 class="mt-2 text-primary">Portafolio de Consultoría</h2>
            <div class="section-title-line"></div>
        </div>
        <div class="row g-4">
            <!-- Card 1 -->
            <div class="col-md-4">
                <div class="premium-card">
                    <div class="icon-box">
                        <i class="fa-solid fa-chart-line"></i>
                    </div>
                    <h3>Auditoría Interna</h3>
                    <p class="text-muted small mb-4">Evaluación sistemática de procesos para identificar riesgos operativos y asegurar la transparencia financiera.</p>
                    <ul class="list-unstyled mb-4 small">
                        <li class="mb-2"><i class="fa-solid fa-circle-check text-gold me-2"></i> Optimización de recursos</li>
                        <li><i class="fa-solid fa-circle-check text-gold me-2"></i> Mitigación de fraudes</li>
                    </ul>
                    <a class="text-gold text-decoration-none fw-bold small" href="#">Ver detalle <i class="fa-solid fa-arrow-right ms-1"></i></a>
                </div>
            </div>
            <!-- Card 2 -->
            <div class="col-md-4">
                <div class="premium-card">
                    <div class="icon-box">
                        <i class="fa-solid fa-shield-halved"></i>
                    </div>
                    <h3>Control Interno</h3>
                    <p class="text-muted small mb-4">Diseño e implementación de marcos de control robustos basados en metodologías COSO para salvaguardar activos.</p>
                    <ul class="list-unstyled mb-4 small">
                        <li class="mb-2"><i class="fa-solid fa-circle-check text-gold me-2"></i> Estructura organizativa</li>
                        <li><i class="fa-solid fa-circle-check text-gold me-2"></i> Supervisión continua</li>
                    </ul>
                    <a class="text-gold text-decoration-none fw-bold small" href="#">Ver detalle <i class="fa-solid fa-arrow-right ms-1"></i></a>
                </div>
            </div>
            <!-- Card 3 -->
            <div class="col-md-4">
                <div class="premium-card">
                    <div class="icon-box">
                        <i class="fa-solid fa-building-columns"></i>
                    </div>
                    <h3>Gestión Pública</h3>
                    <p class="text-muted small mb-4">Asesoría especializada para entidades estatales enfocada en la eficiencia del gasto y cumplimiento legal.</p>
                    <ul class="list-unstyled mb-4 small">
                        <li class="mb-2"><i class="fa-solid fa-circle-check text-gold me-2"></i> Modernización estatal</li>
                        <li><i class="fa-solid fa-circle-check text-gold me-2"></i> Rendición de cuentas</li>
                    </ul>
                    <a class="text-gold text-decoration-none fw-bold small" href="#">Ver detalle <i class="fa-solid fa-arrow-right ms-1"></i></a>
                </div>
            </div>
            <!-- Card 4 (Wide) -->
            <div class="col-md-8">
                <div class="premium-card">
                    <div class="row align-items-center">
                        <div class="col-md-7">
                            <div class="icon-box">
                                <i class="fa-solid fa-gavel"></i>
                            </div>
                            <h3>Cumplimiento Normativo</h3>
                            <p class="text-muted small mb-4">Aseguramos que su empresa opere bajo el marco legal vigente, evitando sanciones y fortaleciendo la reputación corporativa.</p>
                            <div class="row g-2">
                                <div class="col-6 small"><i class="fa-solid fa-shield-check text-gold me-2"></i> Compliance Legal</div>
                                <div class="col-6 small"><i class="fa-solid fa-lock text-gold me-2"></i> Gestión de Riesgos</div>
                            </div>
                        </div>
                        <div class="col-md-5 d-none d-md-block">
                            <img alt="Justice" class="img-fluid rounded grayscale" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAvMfL-OV5zeV9ruO7VCYGecd3yhhcqOk1V2Uw98mGsO9d4fdYbYZtymZbAnGNQIwUFpJuKELTIBwF9DFRM1FvDHkdahaPxxrmZs_h3ChyUXbgRpFC_F25wQLO9PivNAlkNOC_OnkRCO1aAVEuI1ioHQXTlVZPUsS47EGNCkAR-gw88ZVzVglK3CzbZtjd-2AP32wv1pM17PRvdpeFuNaK9LluWzhYaILaFg6HWL4vrSvCtpVJ7anDVEJuy5m3ZLV4gyG9GAOf14sQ" style="height: 180px; object-fit: cover;" />
                        </div>
                    </div>
                </div>
            </div>
            <!-- Card 5 -->
            <div class="col-md-4">
                <div class="premium-card">
                    <div class="icon-box">
                        <i class="fa-solid fa-briefcase"></i>
                    </div>
                    <h3>Asesoría Empresarial</h3>
                    <p class="text-muted small mb-4">Consultoría integral para el crecimiento sostenible y la toma de decisiones estratégicas de alta dirección.</p>
                    <a class="text-gold text-decoration-none fw-bold small" href="#">Ver detalle <i class="fa-solid fa-arrow-right ms-1"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Contact CTA Section -->
<section class="contact-section">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-6">
                <h2 class="display-5 mb-4">¿Listo para elevar el estándar de su organización?</h2>
                <p class="lead mb-5 opacity-75">Nuestros consultores senior están listos para analizar sus desafíos y proponer soluciones a medida que generen valor real desde el primer día.</p>
                <div class="d-flex align-items-start gap-4">
                    <div class="bg-secondary rounded-circle d-flex align-items-center justify-content-center" style="width: 56px; height: 56px; flex-shrink: 0;">
                        <i class="fa-solid fa-calendar-check text-dark fs-4"></i>
                    </div>
                    <div>
                        <h4 class="mb-1">Diagnóstico Inicial Gratis</h4>
                        <p class="opacity-75">Sesión de 30 minutos para evaluar sus necesidades críticas.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="contact-form-card">
                    <h3 class="text-center text-primary mb-4">Solicitar Asesoría Técnica</h3>
                    <form>
                        <div class="row g-3 mb-3">
                            <div class="col-md-6">
                                <label class="form-label small fw-bold">Nombre Completo</label>
                                <input class="form-control" placeholder="Ej. Juan Pérez" type="text" />
                            </div>
                            <div class="col-md-6">
                                <label class="form-label small fw-bold">Correo Corporativo</label>
                                <input class="form-control" placeholder="juan@empresa.com" type="email" />
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label small fw-bold">Servicio de Interés</label>
                            <select class="form-select">
                                <option>Auditoría Interna</option>
                                <option>Control Interno</option>
                                <option>Gestión Pública</option>
                                <option>Cumplimiento Normativo</option>
                                <option>Asesoría Empresarial</option>
                            </select>
                        </div>
                        <div class="mb-4">
                            <label class="form-label small fw-bold">Mensaje / Requerimiento</label>
                            <textarea class="form-control" placeholder="Describa brevemente su consulta..." rows="4"></textarea>
                        </div>
                        <button class="btn btn-gold w-100 rounded-3" type="submit">Agendar Cita de Consultoría</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection



<style>
    :root {
        --primary: #001430;
        --primary-container: #002855;
        --secondary: #C5A059;
        --secondary-dark: #775a19;
        --background: #f8f9fa;
        --surface: #ffffff;
        --on-surface: #191c1d;
        --on-surface-variant: #43474f;
        --on-primary: #ffffff;
        --text-gold: #C5A059;
    }

    body {
        font-family: 'Inter', sans-serif;
        background-color: var(--background);
        color: var(--on-surface);
    }

    h1,
    h2,
    h3,
    h4,
    .navbar-brand {
        font-family: 'Lexend', sans-serif;
        font-weight: 600;
    }

    .navbar {
        background-color: rgba(255, 255, 255, 0.9);
        backdrop-filter: blur(10px);
        border-bottom: 1px solid rgba(0, 0, 0, 0.1);
        height: 80px;
    }

    .navbar-brand {
        color: var(--primary);
        font-weight: 700;
        font-size: 1.5rem;
    }

    .nav-link {
        font-size: 0.875rem;
        text-transform: uppercase;
        letter-spacing: 0.05em;
        color: var(--on-surface-variant);
        font-weight: 500;
        transition: all 0.3s ease;
        padding: 0.5rem 1rem !important;
    }

    .nav-link:hover {
        color: var(--primary);
        transform: translateY(-2px);
    }

    .nav-link.active {
        color: var(--primary);
        border-bottom: 2px solid var(--secondary);
    }

    .btn-primary-custom {
        background-color: var(--primary);
        color: white;
        border-radius: 0.5rem;
        padding: 0.5rem 1.5rem;
        transition: transform 0.3s;
    }

    
    .floating-socials {
        position: fixed;
        right: 24px;
        top: 50%;
        transform: translateY(-50%);
        z-index: 1000;
        display: flex;
        flex-direction: column;
        gap: 1rem;
    }

    .social-btn {
        width: 48px;
        height: 48px;
        background: white;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        color: var(--primary);
        text-decoration: none;
        transition: all 0.3s;
        border: 1px solid rgba(0, 0, 0, 0.05);
    }

    .social-btn:hover {
        background: var(--primary);
        color: white;
        transform: scale(1.1);
    }

    .section-title-line {
        width: 80px;
        height: 4px;
        background-color: var(--secondary);
        margin: 1.5rem auto;
    }

    .contact-section {
        background-color: var(--primary);
        color: white;
        padding: 100px 0;
    }

    .contact-form-card {
        background: white;
        border-radius: 1.25rem;
        padding: 2.5rem;
        color: var(--on-surface);
        box-shadow: 0 15px 40px rgba(0, 0, 0, 0.3);
    }

    .btn-gold {
        background-color: var(--secondary);
        color: var(--primary);
        font-weight: 700;
        border: none;
        padding: 1rem;
        transition: all 0.3s;
    }

    .btn-gold:hover {
        filter: brightness(1.1);
        color: var(--primary);
    }

    footer {
        background-color: var(--primary);
        border-top: 1px solid rgba(255, 255, 255, 0.1);
        color: rgba(255, 255, 255, 0.7);
    }

    .footer-link {
        color: rgba(255, 255, 255, 0.7);
        text-decoration: none;
        transition: all 0.3s;
    }

    .footer-link:hover {
        color: var(--secondary);
        padding-left: 5px;
    }
</style>