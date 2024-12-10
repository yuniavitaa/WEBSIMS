<?= $this->extend('layout/admin_template') ?>

<?= $this->section('content') ?>

<div class="container mt-4">
    <h3>Edit User</h3>

    <form action="/admin/user/update/<?= $user['id'] ?>" method="post">
        <div class="form-group">
            <label for="fullname">Full Name</label>
            <input type="text" name="fullname" id="fullname" class="form-control" value="<?= $user['fullname'] ?>" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="form-control" value="<?= $user['email'] ?>" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>

<?= $this->endSection() ?>