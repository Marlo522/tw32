<div class="products-container">
    <header class="hero-section text-center py-5 mb-5">
        <div class="container">
            <h1 class="display-4 text-white fw-bold mb-3">Our Products</h1>
            <p class="lead text-white-50">Discover our amazing collection</p>
        </div>
    </header>

    <main class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-10">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h2 class="h4 text-dark mb-0">Product Management</h2>
                    <a href="<?= base_url('products/add'); ?>" class="btn btn-primary btn-lg shadow-sm btn-add-new">
                        <span class="material-symbols-outlined me-2">add</span>
                        Add New Product
                    </a>
                </div>

                <div class="card shadow-lg border-0">
                    <div class="card-header bg-gradient-primary text-white py-3">
                        <h5 class="card-title mb-0">
                            <i class="fas fa-boxes me-2"></i>
                            Products Catalog
                        </h5>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-hover mb-0">
                                <thead class="table-light">
                                    <tr>
                                        <th class="border-0 py-3 px-4">Image</th>
                                        <th class="border-0 py-3">Product Name</th>
                                        <th class="border-0 py-3">Description</th>
                                        <th class="border-0 py-3">Price</th>
                                        <th class="border-0 py-3 text-center">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($products as $product): ?>
                                    <tr class="align-middle product-row">
                                        <td class="px-4 py-3">
                                            <div class="product-image-container">
                                                <?php if (!empty($product['productimage'])): ?>
                                                    <img src="<?= base_url('uploads/' . $product['productimage']); ?>" 
                                                         alt="<?= esc($product['productname']); ?>" 
                                                         class="product-thumbnail rounded shadow-sm">
                                                <?php else: ?>
                                                    <div class="no-image-placeholder d-flex align-items-center justify-content-center rounded">
                                                        <i class="fas fa-image text-muted fa-2x"></i>
                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                        </td>
                                        <td class="py-3">
                                            <h6 class="product-name mb-0 fw-bold text-dark"><?= esc($product['productname']); ?></h6>
                                        </td>
                                        <td class="py-3">
                                            <p class="product-description text-muted mb-0"><?= esc($product['productdescription']); ?></p>
                                        </td>
                                        <td class="py-3">
                                            <span class="price-tag badge bg-success fs-6 px-3 py-2">$<?= esc($product['price']); ?></span>
                                        </td>
                                        <td class="py-3 text-center">
                                            <div class="action-buttons">
                                                <a href="<?= base_url('products/view/' . $product['productid']); ?>" 
                                                   class="action-icon action-view me-2" 
                                                   title="View Product">
                                                    <i class="fas fa-eye"></i>
                                                </a>
                                                <a href="<?= base_url('products/edit/' . $product['productid']); ?>" 
                                                   class="action-icon action-edit me-2" 
                                                   title="Edit Product">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                                <a href="<?= base_url('products/delete/' . $product['productid']); ?>" 
                                                   class="action-icon action-delete" 
                                                   title="Delete Product"
                                                   onclick="return confirm('Are you sure you want to delete this product?')">
                                                    <i class="fas fa-trash"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>