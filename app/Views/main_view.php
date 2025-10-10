<div class="container-fluid vh-100 d-flex align-items-center bg-dark p-0 position-relative overflow-hidden">
    <div class="position-absolute w-100 h-100 main-container"></div>
    
    <div class="row w-100 h-100 g-0 position-relative">
        <div class="col-lg-6 d-flex align-items-center justify-content-center h-100 position-relative">
            <div class="position-absolute top-0 start-0 w-100 h-100 left-decorative-bg"></div>
            
            <div class="text-center p-5 position-relative z-3">
                <div class="mb-4">
                    <h1 class="display-1 fw-bold mb-3 text-white main-title">
                        Aling Basyang
                    </h1>
                    <h2 class="display-3 fw-light mb-4 text-warning position-relative subtitle">
                        Sisigan
                        <div class="position-absolute bottom-0 start-50 translate-middle-x subtitle-underline"></div>
                    </h2>
                </div>
                
                <p class="lead mb-5 fw-light text-light lead-text">
                    SISIGuraduhin kong masasarapan ka!
                </p>
                
                <div class="d-flex gap-3 justify-content-center flex-wrap">
                    <a href="<?= base_url('products'); ?>" class="btn btn-warning btn-lg px-5 py-3 rounded-pill fw-semibold shadow-lg position-relative overflow-hidden btn-menu">
                        <span class="position-relative z-2">
                            <i class="fas fa-utensils me-2"></i>Check Products
                        </span>
                        <div class="position-absolute top-0 start-0 w-100 h-100 bg-light opacity-0 btn-overlay"></div>
                    </a>
                    <a href="#contact" class="btn btn-outline-light btn-lg px-5 py-3 rounded-pill fw-semibold shadow-lg position-relative overflow-hidden btn-contact">
                        <span class="position-relative z-2">
                            <i class="fas fa-phone me-2"></i>Call
                        </span>
                        <div class="position-absolute top-0 start-0 w-100 h-100 bg-warning opacity-0 btn-overlay"></div>
                    </a>
                </div>
            </div>
        </div>
        
        <div class="col-lg-6 d-flex align-items-center justify-content-center h-100 position-relative overflow-hidden">
            <div class="position-relative w-100 h-100 d-flex align-items-center justify-content-center">
                <div class="position-absolute w-100 h-100 image-glow"></div>
                
                <div class="position-relative image-container">
                    <img src="<?= base_url('public/assets/img/sisig.png'); ?>" 
                         alt="Delicious Sisig from Aling Basyang" 
                         class="w-100 h-100 main-image">
                </div>
                
                <div class="position-absolute decorative-circle-1"></div>
                <div class="position-absolute decorative-circle-2"></div>
            </div>
        </div>
    </div>
</div>