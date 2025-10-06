<header class="text-center">
    <h1>Users List</h1>
</header>
<main>
    <div class="col col-md-8 mx-auto">
        <a href="#" class="btn btn-primary btn-add-new">
            <span class="material-symbols-outlined">person_add</span>
            Add New User
        </a>
        <table class="table table-hover table-striped">
            <thead>
                <tr>
                    <th>User Name</th>
                    <th>Full Name</th>
                    <th>E-Mail</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($users as $user): ?>
                <tr>
                    <td><?= esc($user['username']) ?></td>
                    <td><?= esc($user['fullname']) ?></td>
                    <td><?= esc($user['email']) ?></td>
                    <td>
                        <a href="#" class="action-icon action-view" title="View User">
                            <i class="fas fa-eye"></i>
                        </a>
                        <a href="#" class="action-icon action-edit" title="Edit User">
                            <i class="fas fa-edit"></i>
                        </a>
                        <a href="#" class="action-icon action-delete" title="Delete User">
                            <i class="fas fa-trash"></i>
                        </a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</main>