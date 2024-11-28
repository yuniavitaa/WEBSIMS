<?= $this->extend('layout/frontend_template') ?>

<?= $this->section('style') ?>
<style>
    body {
        overflow-x: hidden;
    }
</style>
<?= $this->endSection() ?>


<?= $this->section('content') ?>
<div class="container pt-5 mt-5">
    <h3>Upload Bukti Pembayaran</h3>
    <form action="<?= base_url('proses-upload-bukti') ?>" method="post" enctype="multipart/form-data">
        <?= csrf_field() ?>
        <div class="form-group">
            <label for="pendaftaran_id">ID Pendaftaran</label>
            <input type="text" name="pendaftaran_id" id="pendaftaran_id" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" name="nama" id="nama" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="nomor_hp">Nomor HP</label>
            <input type="text" name="nomor_hp" id="nomor_hp" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="bukti_pembayaran">Bukti Pembayaran</label>
            <input type="file" name="bukti_pembayaran" id="bukti_pembayaran" class="form-control" required>
        </div>
        <div>
        <label for="payment_method">Metode Pembayaran</label>
        <div class="form-group">
        <select name="payment_method" id="payment_method" required>
            <option value="transfer">Transfer</option>
            <option value="gopay">GoPay</option>
            <option value="shoppepay">ShopeePay</option>
            <option value="dana">Dana</option>
        </select>
    </div>

    <button type="submit" class="btn btn-success">Upload</button>
</div>


<?= $this->endSection() ?>