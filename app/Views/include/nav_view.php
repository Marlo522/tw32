<nav class="navbar navbar-expand-lg navbar-custom">
    <div class="container-fluid">
        <a class="navbar-brand" href="<?= base_url(); ?>"> 
            <img src="<?= base_url('public/assets/img/logo.png'); ?>" alt="Logo" class="img-fluid" style="max-height: 45px;"> 
        </a>
        <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="<?= base_url('users') ?>">Users List</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('products') ?>">Products</a>
                </li>
            </ul>
        </div>
    </div>
</nav>