<div class="container-fluid vh-100 d-flex align-items-center bg-light p-0">
    <div class="row w-100 h-100 g-0">
        <!-- Left Side - Tagline -->
        <div class="col-lg-6 d-flex align-items-center justify-content-center bg-primary text-white h-100">
            <div class="text-center p-5">
                <h1 class="display-3 fw-bold mb-4">Mura na,</h1>
                <h2 class="display-4 fw-light mb-4 text-warning">Nauutang pa!</h2>
                <p class="lead mb-5">Masarap na pagkain, abot-kaya pa. Pati utang, pwede pa rin!</p>
                <div class="d-flex gap-3 justify-content-center flex-wrap">
                    <a href="<?= base_url('products'); ?>" class="btn btn-warning btn-lg px-4 py-3 rounded-pill fw-semibold">
                        <i class="fas fa-utensils me-2"></i>Tingnan ang Menu
                    </a>
                    <a href="#contact" class="btn btn-outline-light btn-lg px-4 py-3 rounded-pill fw-semibold">
                        <i class="fas fa-phone me-2"></i>Tumawag
                    </a>
                </div>
            </div>
        </div>
        
        <!-- Right Side - Food Image -->
        <div class="col-lg-6 p-0 h-100">
            <div class="w-100 h-100 position-relative">
                <img src="https://images.unsplash.com/photo-1565299624946-b28f40a0ca4b?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80" 
                     alt="Delicious Food" 
                     class="w-100 h-100 object-fit-cover">
                <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark bg-opacity-25"></div>
            </div>
        </div>
    </div>
</div>