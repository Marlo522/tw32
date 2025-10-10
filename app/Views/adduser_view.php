<main class="container py-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="mb-0 d-flex align-items-center gap-2 text-white">
            <span class="material-symbols-outlined add-user-header-icon">person_add</span>Add User
        </h2>
    </div>

    <div class="card shadow-sm border-0 bg-dark">
        <div class="card-body p-4">
            <form action="<?= base_url('users/insert'); ?>" method="post" id="addUserForm" class="simple-user-form">
                <div class="row g-3">
                    <div class="col-md-6">
                        <label class="form-label small fw-semibold d-flex align-items-center gap-1 text-light">
                            <span class="material-symbols-outlined form-label-icon">account_circle</span>Username
                        </label>
                        <input type="text" name="username" id="username" class="form-control bg-dark text-white border-secondary" placeholder="Enter username" required>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label small fw-semibold d-flex align-items-center gap-1 text-light">
                            <span class="material-symbols-outlined form-label-icon">lock</span>Password
                        </label>
                        <input type="password" name="password" id="password" class="form-control bg-dark text-white border-secondary" placeholder="Enter password" required>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label small fw-semibold d-flex align-items-center gap-1 text-light">
                            <span class="material-symbols-outlined form-label-icon">person</span>Full Name
                        </label>
                        <input type="text" name="fullname" id="fullname" class="form-control bg-dark text-white border-secondary" placeholder="Enter full name" required>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label small fw-semibold d-flex align-items-center gap-1 text-light">
                            <span class="material-symbols-outlined form-label-icon">email</span>Email
                        </label>
                        <input type="email" name="email" id="email" class="form-control bg-dark text-white border-secondary" placeholder="Enter email address" required>
                    </div>
                </div>

                <div class="d-flex justify-content-end gap-2 mt-4">
                    <a href="<?= base_url('users'); ?>" class="btn btn-outline-light d-flex align-items-center gap-1">
                        <span class="material-symbols-outlined back-btn-icon">arrow_back</span>Back
                    </a>
                    <button type="submit" class="btn btn-warning d-flex align-items-center gap-1">
                        <span class="material-symbols-outlined">save</span>Save User
                    </button>
                </div>
            </form>
        </div>
    </div>
</main>