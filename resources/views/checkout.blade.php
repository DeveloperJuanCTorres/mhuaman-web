@extends('layouts.app')

@section('content')

<div class="container pt-5 pb-5">
    <div class="row mb-5">
        <div class="col-12">
            <h1 class="display-5 text-primary mb-2">Finalizar Inscripción</h1>
            <p class="lead text-muted">Complete su proceso de matrícula con total seguridad y respaldo institucional.</p>
        </div>
    </div>
    <div class="row g-5">
        <!-- Left Column -->
        <div class="col-lg-7">
            <!-- Billing Details -->
            <section class="checkout-card border-brand-top">
                <h2 class="h4 text-primary mb-4">
                    <i class="fa-solid fa-user me-2"></i> Datos de Facturación
                </h2>
                <form>
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label class="form-label">Nombres Completos</label>
                            <input class="form-control" placeholder="Ej. Juan Pérez" type="text" />
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">DNI / RUC</label>
                            <input class="form-control" placeholder="Número de identificación" type="text" />
                        </div>
                        <div class="col-12">
                            <label class="form-label">Correo Electrónico</label>
                            <input class="form-control" placeholder="usuario@empresa.com" type="email" />
                        </div>
                        <div class="col-12">
                            <label class="form-label">Dirección de Facturación</label>
                            <input class="form-control" placeholder="Calle, Av, Número" type="text" />
                        </div>
                    </div>
                </form>
            </section>
            <!-- Payment Methods -->
            <section class="checkout-card">
                <h2 class="h4 text-primary mb-4">
                    <i class="fa-solid fa-wallet me-2"></i> Método de Pago
                </h2>
                <!-- Credit Card Option -->
                <div class="payment-option active">
                    <div class="d-flex align-items-start gap-3">
                        <div class="form-check">
                            <input checked="" class="form-check-input" name="paymentMethod" type="radio" />
                        </div>
                        <div class="flex-grow-1">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <span class="fw-bold text-primary">Tarjeta de Crédito o Débito</span>
                                <i class="fa-solid fa-credit-card text-muted"></i>
                            </div>
                            <div class="row g-3 mt-1">
                                <div class="col-12">
                                    <input class="form-control bg-white" placeholder="Número de Tarjeta" type="text" />
                                </div>
                                <div class="col-6">
                                    <input class="form-control bg-white" placeholder="MM / YY" type="text" />
                                </div>
                                <div class="col-6">
                                    <input class="form-control bg-white" placeholder="CVC" type="text" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Bank Transfer Option -->
                <div class="payment-option">
                    <div class="d-flex align-items-center gap-3">
                        <div class="form-check">
                            <input class="form-check-input" name="paymentMethod" type="radio" />
                        </div>
                        <div class="flex-grow-1 d-flex justify-content-between align-items-center">
                            <div>
                                <span class="fw-bold">Transferencia Bancaria Directa</span>
                                <p class="small text-muted mb-0">Depósito en ventanilla o banca móvil</p>
                            </div>
                            <i class="fa-solid fa-building-columns text-muted"></i>
                        </div>
                    </div>
                </div>
                <!-- PayPal Option -->
                <div class="payment-option">
                    <div class="d-flex align-items-center gap-3">
                        <div class="form-check">
                            <input class="form-check-input" name="paymentMethod" type="radio" />
                        </div>
                        <div class="flex-grow-1 d-flex justify-content-between align-items-center">
                            <div>
                                <span class="fw-bold">PayPal / Pagos Internacionales</span>
                                <p class="small text-muted mb-0">Pague de forma rápida y segura</p>
                            </div>
                            <i class="fa-brands fa-paypal text-muted"></i>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Secure Badges -->
            <div class="d-flex flex-wrap gap-4 mt-4 trust-badge justify-content-center justify-content-md-start">
                <div class="d-flex align-items-center gap-2">
                    <i class="fa-solid fa-lock text-primary"></i> Encriptación SSL de 256 bits
                </div>
                <div class="d-flex align-items-center gap-2">
                    <i class="fa-solid fa-shield-check text-primary"></i> Transacción Segura Certificada
                </div>
            </div>
        </div>
        <!-- Right Column -->
        <div class="col-lg-5">
            <aside class="order-summary-card shadow-lg">
                <h2 class="h4 mb-4 border-bottom border-light border-opacity-10 pb-3">Resumen del Pedido</h2>
                <!-- Item -->
                <div class="d-flex gap-3 mb-4">
                    <img alt="Curso" class="img-course-thumb" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAWEL5fGEgh9UJ237uLQeOdgCeH03PHj-ZE8OKZQEFp3GOd2_KEtC_JkQLAFYgeb-m7VM7fdurnlwJ_3oV4MqcqAzriHzYlY55bKWdlnVONPNP5GxgCjftya6dadSeECp8XEggxpKxuwabxMukoEpSiKtjukNdeCC-6mvnyK8BaizLuhL1PyvTwWjhBeWwGoBXKKz9vZx47r5J1ccLN8_vIQ-iCTzGWSqGMmyBrl6AoXub18uR3ITZgIibsehM9GdsPCTVkjIh8B8A" />
                    <div class="flex-grow-1">
                        <p class="small text-secondary-brand mb-0">Programa Especializado</p>
                        <h3 class="h6 mb-1">Auditoría de Gestión Pública Avanzada</h3>
                        <p class="small text-white-50">Modalidad: Online / En Vivo</p>
                    </div>
                    <div class="fw-bold text-secondary-brand">
                        $299.00
                    </div>
                </div>
                <!-- Calc -->
                <div class="border-top border-light border-opacity-10 pt-4 mb-4">
                    <div class="d-flex justify-content-between mb-2">
                        <span class="text-white-50">Subtotal</span>
                        <span>$299.00</span>
                    </div>
                    <div class="d-flex justify-content-between mb-2">
                        <span class="text-white-50">Impuestos (IGV 18%)</span>
                        <span>$53.82</span>
                    </div>
                    <div class="d-flex justify-content-between fst-italic">
                        <span class="text-white-50">Descuento Corporativo (10%)</span>
                        <span class="text-secondary-brand">-$29.90</span>
                    </div>
                </div>
                <!-- Total -->
                <div class="border-top border-light border-opacity-10 pt-4 d-flex justify-content-between align-items-end mb-4">
                    <div>
                        <p class="text-white-50 small text-uppercase mb-0">Total a Pagar</p>
                        <p class="display-6 fw-bold mb-0">$322.92</p>
                    </div>
                    <div class="text-end">
                        <p class="text-white-50 small mb-0">En moneda local aprox.</p>
                        <p class="fw-bold text-secondary-brand mb-0">S/ 1,227.10</p>
                    </div>
                </div>
                <button class="btn btn-pay">
                    PROCESAR PAGO AHORA <i class="fa-solid fa-chevron-right ms-2 small"></i>
                </button>
                <!-- Cards icons -->
                <div class="d-flex justify-content-between mt-4 opacity-50">
                    <i class="fa-brands fa-cc-visa fa-2x"></i>
                    <i class="fa-brands fa-cc-mastercard fa-2x"></i>
                    <i class="fa-brands fa-cc-paypal fa-2x"></i>
                </div>
            </aside>
            <!-- Support -->
            <div class="support-box d-flex gap-3 align-items-start">
                <i class="fa-solid fa-headset fs-4 text-primary mt-1"></i>
                <div>
                    <p class="fw-bold text-primary mb-1">¿Necesita asistencia?</p>
                    <p class="small text-muted mb-0">Llámenos al (01) 555-0199 o escriba a informes@mhuaman.com para pagos corporativos vía orden de compra.</p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection



