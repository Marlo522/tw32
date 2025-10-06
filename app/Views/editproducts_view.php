<main class="container py-4 ">
    <h3 class="mb-3 d-flex align-items-center gap-2">
        <span class="material-symbols-outlined" style="font-size:28px;color:#0d6efd;">edit</span>
        Edit Product
    </h3>

    <form action="#" method="post" class="border rounded p-3">
        <input type="hidden" name="id" value="">

        <div class="mb-3">
            <label class="form-label">Name</label>
            <input name="name" class="form-control" value="" required>
        </div>

        <div class="row g-3">
            <div class="col-md-4">
                <label class="form-label">Price</label>
                <input type="number" step="0.01" name="price" class="form-control" value="" required>
            </div>
            <div class="col-md-8">
                <label class="form-label">Image</label>
                <input type="file" name="image" class="form-control">
            </div>
        </div>
        <div class="mb-3">
            <label class="form-label">Description</label>
            <textarea name="description" rows="4" class="form-control"></textarea>
        </div>

        <div class="d-flex justify-content-end gap-2">
            <a href="<?= site_url('products'); ?>" class="btn btn-outline-secondary">Cancel</a>
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
    </form>
</main>