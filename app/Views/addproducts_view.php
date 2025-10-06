<main class="container py-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="mb-0 d-flex align-items-center gap-2">
            <span class="material-symbols-outlined" style="font-size:32px;color:#0d6efd;">add_box</span>Add Product
        </h2>
        
    </div>

    <div class="card shadow-sm border-0">
        <div class="card-body p-4">
            <form action="<?= base_url('products/insert'); ?>" method="post" enctype="multipart/form-data" id="addProductForm" class="simple-product-form">
                <div class="row g-3">
                    <div class="col-md-8">
                        <label class="form-label small fw-semibold d-flex align-items-center gap-1">
                            <span class="material-symbols-outlined" style="font-size:18px;">label</span>Product Name
                        </label>
                        <input type="text" name="productname" id="productname" class="form-control" placeholder="g150" required>
                    </div>

                    <div class="col-md-4">
                        <label class="form-label small fw-semibold d-flex align-items-center gap-1">
                            <span class="material-symbols-outlined" style="font-size:18px;">payments</span>Price
                        </label>
                        <input type="number" step="0.01" name="price" id="price" class="form-control" placeholder="1 Billion" required>
                    </div>


                    <div class="col-md-5">
                        <label class="form-label small fw-semibold d-flex align-items-center gap-1">
                            <span class="material-symbols-outlined" style="font-size:18px;">image</span>Product Image
                        </label>
                        <input type="file" name="productimage" id="productimage" class="form-control" accept="image/*">
                    </div>

                    <div class="col-md-7">
                        <label class="form-label small fw-semibold d-flex align-items-center gap-1">
                            <span class="material-symbols-outlined" style="font-size:18px;">description</span>Description
                        </label>
                        <textarea name="productdescription" id="productdescription" rows="5" class="form-control" placeholder="Add description here"></textarea>
                    </div>
                </div>

                <div class="d-flex justify-content-end gap-2 mt-4">
                    <a href="<?= base_url('products'); ?>" class="btn btn-outline-secondary d-flex align-items-center gap-1">
                        <span class="material-symbols-outlined" style="font-size:18px;">arrow_back</span>Back
                        
                    </a>
                    <button type="submit" class="btn btn-primary d-flex align-items-center gap-1">
                        <span class="material-symbols-outlined">save</span>Save
                    </button>
                </div>
            </form>
        </div>
    </div>
</main>
