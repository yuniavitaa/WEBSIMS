<?= $this->extend('layout/admin_template') ?>

<?= $this->section('content') ?>

<div class="container mt-4">
    <h2>Tambah User</h2>
    <form method="post" action="<?= base_url('/admin/create') ?>">
        <label for="fullname">Fullname:</label>
        <input type="text" name="fullname" required><br>

        <label for="email">Email:</label>
        <input type="email" name="email" required><br>

        <label for="password">Password:</label>
        <input type="password" name="password" required><br>

        <label for="role">Role:</label>
        <select name="role">
            <option value="member">Member</option>
            <option value="admin">Admin</option>
        </select><br>

        <button type="submit">Simpan</button>
    </form>

</div>

<?= $this->endSection() ?>