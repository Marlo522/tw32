<main class="container py-4 ">
    <h3 class="mb-3 d-flex align-items-center gap-2 text-light">
        <span class="material-symbols-outlined" style="font-size:28px;color:#0d6efd;">edit</span>
        Edit Product
    </h3>

    <form action="<?= base_url('products/update/' . $product['productid']); ?>" method="post" enctype="multipart/form-data" class="border rounded p-3">

        <div class="mb-3">
            <label class="form-label text-light">ProductName</label>
            <input name="productname" id="productname" class="form-control" value="<?= esc($product['productname']); ?>">
        </div>

        <div class="row g-3">
            <div class="col-md-4">
                <label class="form-label text-light">Price</label>
                <input type="number" name="price" id="price" step="0.01" class="form-control" value="<?= esc($product['price']); ?>">
            </div>
            <div class="col-md-8">
                <label class="form-label text-light">Image</label>
                <input type="file"  name="productimage" id="productimage" class="form-control">
                <?php if(!empty($product['productimage'])): ?>
                <?php endif; ?>
            </div>
        </div>
        <div class="mb-3">
            <label class="form-label text-light">Description</label>
            <textarea name="productdescription" id="productdescription" rows="4" class="form-control"><?= esc($product['productdescription']); ?></textarea>
        </div>

        <div class="d-flex justify-content-end gap-2">
            <a href="<?= base_url('products'); ?>" class="btn btn-outline-secondary text-light">Cancel</a>
            <button type="submit" class="btn btn-warning">Update</button>
        </div>
    </form>
</main>