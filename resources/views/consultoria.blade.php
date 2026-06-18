@extends('layouts.app')
<style>
    .consultoria-modal{
        overflow:hidden;
        border-radius:24px;
        box-shadow:0 25px 80px rgba(0,0,0,.25);
    }

    .modal-side{
        background:
        linear-gradient(
            135deg,
            #0f172a,
            #1e3a8a
        );

        color:white;
    }

    .side-content{
        padding:60px 50px;
        height:100%;
        display:flex;
        flex-direction:column;
        justify-content:center;
    }

    .beneficio{
        margin-bottom:18px;
        font-size:15px;
    }

    .beneficio i{
        color:#fbbf24;
        margin-right:10px;
    }

    .premium-input{
        border-radius:14px;
        padding:14px 16px;
        border:1px solid #e5e7eb;
    }

    .premium-input:focus{
        border-color:#2563eb;
        box-shadow:0 0 0 4px rgba(37,99,235,.15);
    }

    .custom-close{
        position:absolute;
        top:20px;
        right:20px;
        z-index:100;
    }

    .modal-backdrop.show{
        opacity:.75;
        backdrop-filter:blur(4px);
    }
</style>
@section('content')

<!-- Hero Section -->
<section class="hero-section">
    <img alt="Modern corporate facade" class="hero-bg-img" src="{{ asset('storage/' . $principal->banner) }}" />
    <div class="container position-relative">
        <div class="row">
            <div class="col-lg-7">
                <h1 class="display-4 mb-4">{{ $principal->titulo }}</h1>
                <p class="lead mb-5 opacity-75">{{ $principal->descripcion }}</p>
                <div class="d-flex flex-wrap gap-3">
                    <button
                        class="btn btn-primary py-3 px-4"
                        data-bs-toggle="modal"
                        data-bs-target="#consultoriaModal"
                        data-servicio="">
                        Solicitar Asesoría
                    </button>
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
            @foreach($consultorias as $consultoria)
            <div class="col-md-4">
                <div class="premium-card">
                    <div class="icon-box">
                        <img src="{{ asset('storage/' . $consultoria->icono) }}" alt="{{ $consultoria->nombre }}" width="48">
                        <!-- <i class="fa-solid fa-chart-line"></i> -->
                    </div>
                    <h3>{{ $consultoria->nombre }}</h3>
                    <p class="text-muted small mb-4">{{ $consultoria->descripcion }}</p>
                    <ul class="list-unstyled mb-4 small">
                        @if($consultoria->item_1)
                        <li class="mb-2"><i class="fa-solid fa-circle-check text-gold me-2"></i> {{ $consultoria->item_1}}</li>
                        @endif
                        @if($consultoria->item_2)
                        <li><i class="fa-solid fa-circle-check text-gold me-2"></i> {{ $consultoria->item_2 }}</li>
                        @endif
                        @if($consultoria->item_3)
                        <li class="mb-2"><i class="fa-solid fa-circle-check text-gold me-2"></i> {{ $consultoria->item_3 }}</li>
                        @endif
                        @if($consultoria->item_4)
                        <li><i class="fa-solid fa-circle-check text-gold me-2"></i> {{ $consultoria->item_4 }}</li>
                        @endif
                    </ul>
                    <button
                        class="btn btn-outline-primary w-100 solicitar-consultoria"
                        data-bs-toggle="modal"
                        data-bs-target="#consultoriaModal"
                        data-servicio="{{ $consultoria->nombre }}">
                        Solicitar Asesoría
                    </button>
                </div>
            </div>
            @endforeach
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
                <div class="contact-form-card text-center">
                    <h3 class="text-primary mb-3">
                        Solicite una asesoría especializada
                    </h3>

                    <p class="text-muted mb-4">
                        Nuestro equipo se comunicará con usted para brindarle una solución personalizada.
                    </p>

                    <button
                        class="btn btn-gold btn-lg"
                        data-bs-toggle="modal"
                        data-bs-target="#consultoriaModal"
                    >
                        Solicitar Asesoría
                    </button>

                </div>
            </div>
        </div>
    </div>
</section>


<div class="modal fade" id="consultoriaModal" tabindex="-1">
    <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content consultoria-modal border-0">

            <button type="button"
                class="btn-close btn-close custom-close"
                data-bs-dismiss="modal">
            </button>

            <div class="row g-0">

                <!-- PANEL IZQUIERDO -->
                <div class="col-lg-5 modal-side">

                    <div class="side-content">

                        <img src="{{ asset('storage/' . $company->logo) }}"
                             class="m-auto d-flex"
                             width="100">

                        <span class="badge bg-light text-primary mb-3">
                            CONSULTORÍA ESPECIALIZADA
                        </span>

                        <h2 class="fw-bold mb-4">
                            Impulse el crecimiento de su organización
                        </h2>

                        <p class="opacity-75 mb-4">
                            Nuestros especialistas analizarán su situación y
                            propondrán soluciones estratégicas adaptadas a sus objetivos.
                        </p>

                        <div class="beneficio">
                            <i class="fa-solid fa-circle-check"></i>
                            Diagnóstico inicial gratuito
                        </div>

                        <div class="beneficio">
                            <i class="fa-solid fa-circle-check"></i>
                            Atención personalizada
                        </div>

                        <div class="beneficio">
                            <i class="fa-solid fa-circle-check"></i>
                            Propuesta técnica especializada
                        </div>

                    </div>

                </div>

                <!-- FORMULARIO -->
                <div class="col-lg-7">

                    <div class="p-5">

                        <h3 class="fw-bold mb-2">
                            Solicitar Asesoría
                        </h3>

                        <p class="text-muted mb-4">
                            Complete el formulario y un consultor se comunicará con usted.
                        </p>

                        <form id="formConsultoria"
                            method="POST"
                            action="{{ route('consultorias.enviar') }}">

                            @csrf

                            <div class="row g-3">

                                <div class="col-md-6">
                                    <label class="form-label">
                                        Nombre Completo
                                    </label>

                                    <input type="text"
                                           name="nombre"
                                           class="form-control premium-input"
                                           required>
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label">
                                        Correo Electrónico
                                    </label>

                                    <input type="email"
                                           name="correo"
                                           class="form-control premium-input"
                                           required>
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label">
                                        Teléfono
                                    </label>

                                    <input type="text"
                                           name="telefono"
                                           class="form-control premium-input">
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label">
                                        Consultoría
                                    </label>

                                    <select id="consultoriaSelect"
                                            name="servicio"
                                            class="form-select premium-input"
                                            required>

                                        <option value="">
                                            Seleccione una consultoría
                                        </option>

                                        @foreach($consultorias as $consultoria)
                                            <option value="{{ $consultoria->nombre }}">
                                                {{ $consultoria->nombre }}
                                            </option>
                                        @endforeach

                                    </select>
                                </div>

                                <div class="col-12">

                                    <label class="form-label">
                                        Cuéntenos su necesidad
                                    </label>

                                    <textarea
                                        name="mensaje"
                                        rows="5"
                                        class="form-control premium-input"
                                        placeholder="Describa brevemente su requerimiento..."
                                        required></textarea>

                                </div>

                                <div class="col-12">

                                    <button
                                        id="btnEnviarConsultoria"
                                        class="btn btn-primary w-100 py-3 fw-semibold"
                                        type="submit">

                                        <span class="btn-text">
                                            Enviar Solicitud
                                        </span>

                                    </button>

                                </div>

                            </div>

                        </form>

                    </div>

                </div>

            </div>

        </div>
    </div>
</div>



<script>
    document.getElementById('consultoriaModal')
    .addEventListener('show.bs.modal', function (event) {

        const button = event.relatedTarget;

        if(!button) return;

        const servicio = button.dataset.servicio;

        const select = document.getElementById('consultoriaSelect');

        if(servicio){
            select.value = servicio;
        }else{
            select.selectedIndex = 0;
        }

    });
</script>

<script>
    document.addEventListener('DOMContentLoaded', function(){

        const form = document.getElementById('formConsultoria');
        const btn = document.getElementById('btnEnviarConsultoria');

        form.addEventListener('submit', function(){

            btn.disabled = true;

            btn.innerHTML = `
                <span class="spinner-border spinner-border-sm me-2"></span>
                Enviando solicitud...
            `;
        });

    });
</script>

@endsection

