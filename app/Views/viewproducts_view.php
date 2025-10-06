<main class="container py-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="mb-0 d-flex align-items-center gap-2">
            <span class="material-symbols-outlined" style="font-size:32px;color:#0d6efd;">visibility</span>View Product
        </h2>
    </div>
    <div class="card shadow-sm border-0">
        <div class="card-body p-4">
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="text-center">
                        <label class="form-label small fw-semibold d-flex align-items-center justify-content-center gap-1 mb-3">
                            <span class="material-symbols-outlined" style="font-size:18px;">image</span>Product Image
                        </label>
                        <div class="ratio ratio-1x1" style="max-width: 250px; margin: 0 auto;">
                            <div class="border rounded bg-body-secondary d-flex flex-column align-items-center justify-content-center text-muted">
                                <img src="<?= base_url('uploads/' . $product['productimage']); ?>" alt="<?= esc($product['productname']); ?>"class="w-100 h-100 object-fit-cover">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="row g-3">
                        <div class="col-12">
                            <label class="form-label small fw-semibold d-flex align-items-center gap-1">
                                <span class="material-symbols-outlined" style="font-size:18px;" >label</span>Product Name
                            </label>
                            <input type="text" name="productname" id="productname" class="form-control form-control-lg" readonly value="<?= $product['productname']; ?>">
                        </div>

                        <div class="col-12">
                            <label class="form-label small fw-semibold d-flex align-items-center gap-1">
                                <span class="material-symbols-outlined" style="font-size:18px;">payments</span>Price
                            </label>
                            <div class="input-group">
                                <span class="input-group-text">$</span>
                                <input type="number" step="0.01" name="price" id="price" class="form-control form-control-lg" readonly value="<?= $product['price']; ?>">
                            </div>
                        </div>

                        <div class="col-12">
                            <label class="form-label small fw-semibold d-flex align-items-center gap-1">
                                <span class="material-symbols-outlined" style="font-size:18px;">description</span>Description
                            </label>
                            <textarea name="productdescription" id="productdescription" rows="6" class="form-control" readonly><?= $product['productdescription']; ?></textarea>
                        </div>
                    </div>
                </div>
            </div>

            <hr class="my-4">
            
            <div class="d-flex justify-content-end gap-2">
                <a href="<?= base_url('products'); ?>" class="btn btn-outline-secondary d-flex align-items-center gap-1">
                    <span class="material-symbols-outlined" style="font-size:18px;">arrow_back</span>Back
                </a>
            </div>
        </div>
    </div>
</main>