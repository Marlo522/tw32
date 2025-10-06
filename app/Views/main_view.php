<div class="container-fluid vh-100 d-flex align-items-center bg-dark p-0 position-relative overflow-hidden">
    <!-- Background Pattern -->
    <div class="position-absolute w-100 h-100" style="background: linear-gradient(135deg, #1a1a1a 0%, #2d2d2d 50%, #1a1a1a 100%); opacity: 0.8;"></div>
    
    <div class="row w-100 h-100 g-0 position-relative">
        <!-- Left Side - Tagline -->
        <div class="col-lg-6 d-flex align-items-center justify-content-center h-100 position-relative">
            <!-- Decorative elements -->
            <div class="position-absolute top-0 start-0 w-100 h-100" style="background: radial-gradient(circle at 30% 50%, rgba(255, 193, 7, 0.1) 0%, transparent 50%);"></div>
            
            <div class="text-center p-5 position-relative z-3">
                <div class="mb-4">
                    <h1 class="display-1 fw-bold mb-3 text-white" style="text-shadow: 2px 2px 4px rgba(0,0,0,0.5); letter-spacing: -2px;">
                        Aling Basyang
                    </h1>
                    <h2 class="display-3 fw-light mb-4 text-warning position-relative" style="text-shadow: 1px 1px 3px rgba(0,0,0,0.7);">
                        Sisigan
                        <div class="position-absolute bottom-0 start-50 translate-middle-x" style="width: 80px; height: 3px; background: linear-gradient(90deg, transparent, #ffc107, transparent);"></div>
                    </h2>
                </div>
                
                <p class="lead mb-5 fw-light text-light" style="font-size: 1.3rem; text-shadow: 1px 1px 2px rgba(0,0,0,0.5);">
                    SISIGuraduhin kong masasarapan ka!
                </p>
                
                <div class="d-flex gap-3 justify-content-center flex-wrap">
                    <a href="<?= base_url('products'); ?>" class="btn btn-warning btn-lg px-5 py-3 rounded-pill fw-semibold shadow-lg position-relative overflow-hidden" style="transition: all 0.3s ease; border: none;">
                        <span class="position-relative z-2">
                            <i class="fas fa-utensils me-2"></i>Tingnan ang Menu
                        </span>
                        <div class="position-absolute top-0 start-0 w-100 h-100 bg-light opacity-0" style="transition: opacity 0.3s ease;"></div>
                    </a>
                    <a href="#contact" class="btn btn-outline-light btn-lg px-5 py-3 rounded-pill fw-semibold shadow-lg position-relative overflow-hidden" style="transition: all 0.3s ease; border: 2px solid #fff;">
                        <span class="position-relative z-2">
                            <i class="fas fa-phone me-2"></i>Tumawag
                        </span>
                        <div class="position-absolute top-0 start-0 w-100 h-100 bg-warning opacity-0" style="transition: opacity 0.3s ease;"></div>
                    </a>
                </div>
            </div>
        </div>
        
        <!-- Right Side - Food Image -->
        <div class="col-lg-6 d-flex align-items-center justify-content-center h-100 position-relative overflow-hidden">
            <!-- Image container with proper aspect ratio -->
            <div class="position-relative w-100 h-100 d-flex align-items-center justify-content-center">
                <!-- Background glow effect -->
                <div class="position-absolute w-100 h-100" style="background: radial-gradient(circle at center, rgba(255, 193, 7, 0.15) 0%, transparent 70%);"></div>
                
                <!-- Main image with proper fitting -->
                <div class="position-relative" style="width: 85%; height: 85%; max-width: 600px; max-height: 600px;">
                    <img src="<?= base_url('public/assets/img/sisig.png'); ?>" 
                         alt="Delicious Sisig from Aling Basyang" 
                         class="w-100 h-100"
                         style="object-fit: cover; object-position: center; filter: brightness(1.1) contrast(1.1) saturate(1.2);">
                    
                    <!-- Image overlay for extra styling -->
                </div>
                
                <!-- Decorative elements around image -->
                <div class="position-absolute" style="top: 10%; right: 10%; width: 50px; height: 50px; border: 2px solid rgba(255,193,7,0.3); border-radius: 50%; animation: float 3s ease-in-out infinite;"></div>
                <div class="position-absolute" style="bottom: 15%; left: 15%; width: 30px; height: 30px; background: rgba(255,193,7,0.2); border-radius: 50%; animation: float 2s ease-in-out infinite reverse;"></div>
            </div>
        </div>
    </div>
</div>