<div class="users-container">
    <header class="hero-section text-center py-5 mb-5">
        <div class="container">
            <h1 class="display-4 text-white fw-bold mb-3">Users Management</h1>
            <p class="lead text-white-50">Manage your user accounts</p>
        </div>
    </header>

    <main class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-10">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h2 class="h4 text-dark mb-0">User Management</h2>
                    <a href="<?= base_url('users/add'); ?>" class="btn btn-primary btn-lg shadow-sm btn-add-new">
                        <span class="material-symbols-outlined me-2">person_add</span>
                        Add New User
                    </a>
                </div>

                <div class="card shadow-lg border-0">
                    <div class="card-header bg-gradient-primary text-white py-3">
                        <h5 class="card-title mb-0">
                            <i class="fas fa-users me-2"></i>
                            Users Directory
                        </h5>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-hover mb-0">
                                <thead class="table-light">
                                    <tr>
                                        <th class="border-0 py-3 px-4">User Name</th>
                                        <th class="border-0 py-3">Full Name</th>
                                        <th class="border-0 py-3">E-Mail</th>
                                        <th class="border-0 py-3 text-center">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($users as $user): ?>
                                    <tr class="align-middle user-row">
                                        <td class="px-4 py-3">
                                            <h6 class="user-name mb-0 fw-bold"><?= esc($user['username']); ?></h6>
                                        </td>
                                        <td class="py-3">
                                            <p class="full-name mb-0"><?= esc($user['fullname']); ?></p>
                                        </td>
                                        <td class="py-3">
                                            <span><?= esc($user['email']); ?></span>
                                        </td>
                                        <td class="py-3 text-center">
                                            <div class="action-buttons">
                                                <a href="<?= base_url('users/view/' . $user['id']); ?>" class="action-icon action-view me-2" title="View User">
                                                    <i class="fas fa-eye"></i>
                                                </a>
                                                <a href="#" 
                                                   class="action-icon action-edit me-2" 
                                                   title="Edit User">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                                <a href="#" 
                                                   class="action-icon action-delete" 
                                                   title="Delete User"
                                                   onclick="return confirm('Are you sure you want to delete this user?')">
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