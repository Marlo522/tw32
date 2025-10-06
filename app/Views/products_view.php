<header class="text-center">
    <h1 class="text-white">Products</h1>
</header>
<main>
    <div class="col col-md-8 mx-auto">
        <a href="<?= base_url('products/add'); ?>" class="btn btn-primary btn-add-new">
            <span class="material-symbols-outlined">add</span>
            Add New Product
        </a>
        <table class="table table-hover table-striped mt-4">
            <thead>
                <tr>
                    <th>Product Name</th>
                    <th>Product Image</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($products as $product): ?>
                <tr class="align-middle ">
                    <td><?php if (!empty($product['productimage'])): ?>
                            <img src="<?= base_url('uploads/' . $product['productimage']); ?>" alt="<?= esc($product['productname']); ?>" class="img-thumbnail" width="100" height="100">
                        <?php else: ?>
                            <span class="text-muted">No image</span>
                        <?php endif; ?></td>
                    <td><?= esc($product['productname']); ?></td>
                    <td><?= esc($product['productdescription']); ?></td>
                    <td><?= esc($product['price']); ?></td>
                    <td>
                        <a href="<?= base_url('products/view/' . $product['productid']); ?>" class="action-icon action-view" title="View Product">
                            <i class="fas fa-eye"></i>
                        </a>
                        <a href="<?= base_url('products/edit/' . $product['productid']); ?>" class="action-icon action-edit" title="Edit Product">
                            <i class="fas fa-edit"></i>
                        </a>
                        <a href="<?= base_url('products/delete/' . $product['productid']); ?>" class="action-icon action-delete" title="Delete Product">
                            <i class="fas fa-trash"></i>
                        </a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</main>