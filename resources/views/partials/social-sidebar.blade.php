<!-- Social Sidebar -->
<div class="social-sidebar">
    @if($company->facebook)
    <a href="{{ $company->facebook }}" target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
    @endif
    @if($company->tiktok)
    <a href="{{ $company->tiktok }}" target="_blank"><i class="fa-brands fa-tiktok"></i></a>
    @endif

    @if($company->instagram)
    <a href="{{ $company->instagram }}" target="_blank"><i class="fa-brands fa-instagram"></i></a>
    @endif

    @if($company->linkedin)
    <a href="{{ $company->linkedin }}" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a>
    @endif
</div>
<!-- Floating Cart Button -->
<a class="cart-btn" href="#" data-bs-target="#cartOffcanvas" data-bs-toggle="offcanvas">
    <i class=" fa-solid fa-cart-shopping"></i>
    <span class="cart-badge">2</span>
</a>


<!-- Offcanvas Cart -->
<div aria-labelledby="cartOffcanvasLabel" class="offcanvas offcanvas-end premium-shadow" id="cartOffcanvas" tabindex="-1">
    <div class="offcanvas-header p-4 border-bottom">
        <div class="d-flex align-items-center gap-3">
            <i class="fa-solid fa-basket-shopping text-primary fs-4"></i>
            <h5 class="offcanvas-title fw-bold text-primary" id="cartOffcanvasLabel">Tu Carrito</h5>
        </div>
        <button aria-label="Close" class="btn-close" data-bs-dismiss="offcanvas" type="button"></button>
    </div>
    <div class="offcanvas-body p-4">
        <!-- Cart Item 1 -->
        <div class="d-flex gap-3 mb-4">
            <img alt="Curso" class="cart-item-img shadow-sm" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBmyBW7JA81MfypCe7MUke92plUPAiru729gnoJxgtox5rhnRsrF6-h8jCTgV82HNlo855CM7DShmD0_Jv07HHxcaT40ab7OlnaF-R2JIisicJxtfrH2d-HwGgR3QNwoKoWaZdf-usueOfWnO8TtGr_56_XT2rhIdH-Ar87IPROYZ3sKfuOWmh4QdHVhoI7lO1NWAdMe-P-syToq98esX_82-O3jJH5F4NcLnDp7ThQJUihMTFacVqN98nAgV9PZ6YE8tL9Mr7hcq8" />
            <div class="flex-grow-1">
                <h6 class="fw-bold text-primary mb-1" style="font-size: 0.9rem;">Auditoría Financiera Avanzada para Ejecutivos</h6>
                <p class="text-muted small mb-2">Especialización • 40 Horas</p>
                <div class="d-flex justify-content-between align-items-center">
                    <span class="fw-bold text-primary">$299.00</span>
                    <button class="btn btn-link text-danger text-decoration-none p-0 small">
                        <i class="fa-regular fa-trash-can me-1"></i> Eliminar
                    </button>
                </div>
            </div>
        </div>
        <!-- Cart Item 2 -->
        <div class="d-flex gap-3 mb-4">
            <img alt="Curso" class="cart-item-img shadow-sm" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBNRth74dLwNXwCJCh0Pg9efAWIv4elrtWXHbViB2JvCZtTFnXH9RLOVXEPmkasH50y6eiDOrPTwj1FGwx-DrNYh1Gk78dpJ58Vx7YBILMQ_uFIU-kxQxkkxjYIsHr26xjZtwaTgi4um3zCykBGKVemnVoDHtGBy0HMzpF2LlVqpAckY0WjqgtLcyidOM3fvA2vLn_N22TS4oC8RicJTW_YkIhJD9MY2inxK_DbKGCWyQTsUyqNvVEXqqJxV3aMBbyb6vSzI2nqRuk" />
            <div class="flex-grow-1">
                <h6 class="fw-bold text-primary mb-1" style="font-size: 0.9rem;">Liderazgo y Gestión de Equipos de Consultoría</h6>
                <p class="text-muted small mb-2">Certificación • 24 Horas</p>
                <div class="d-flex justify-content-between align-items-center">
                    <span class="fw-bold text-primary">$185.00</span>
                    <button class="btn btn-link text-danger text-decoration-none p-0 small">
                        <i class="fa-regular fa-trash-can me-1"></i> Eliminar
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="cart-footer">
        <div class="mb-4">
            <div class="d-flex justify-content-between text-muted mb-2">
                <span>Subtotal</span>
                <span>$484.00</span>
            </div>
            <div class="d-flex justify-content-between text-muted mb-2">
                <span>Impuestos (IGV)</span>
                <span>$87.12</span>
            </div>
            <div class="d-flex justify-content-between border-top pt-3">
                <h5 class="fw-bold text-primary">Total</h5>
                <h5 class="fw-bold text-primary">$571.12</h5>
            </div>
        </div>
        <a class="btn btn-primary-blue w-100 py-3 mb-3 d-flex align-items-center justify-content-center gap-2" href="{{ route('checkout') }}">
            Finalizar Compra <i class="fa-solid fa-arrow-right"></i>
        </a>
        <button class="btn btn-link w-100 text-primary text-decoration-none fw-bold">Seguir Comprando</button>
        <div class="text-center mt-4 text-muted small">
            <i class="fa-solid fa-shield-halved me-2"></i> Pago 100% seguro y encriptado
        </div>
    </div>
</div>