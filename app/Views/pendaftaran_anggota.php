<?= $this->extend('layout/frontend_template') ?>

<?= $this->section('style') ?>
<style>
</style>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<?php
helper('form');
?>
<div class="container pt-sm-5 mt-5">
    <div class="row">
        <p class="display-3 mb-5" data-aos="fade-up">
            Form Pendaftaran
        </p>
        <?php if (session()->getFlashdata('sukses')) : ?>
            <div class="alert alert-success" role="alert" data-aos="fade-down">
                <?= session()->getFlashdata('sukses') ?>
            </div>
        <?php elseif (session()->getFlashdata('gagal')) : ?>
            <div class="alert alert-danger" role="alert" data-aos="fade-down">
                <?= session()->getFlashdata('gagal') ?>
            </div>
        <?php endif; ?>
        <small class="text-secondary">* Wajib diisi</small>
        <form action="/pendaftaran/kirim" method="post">
            <?= csrf_field() ?>

            <!-- Nama Lengkap -->
            <div class="form-floating mb-2">
                <input id="fullname" class="form-control <?= (validation_show_error('fullname')) ? 'is-invalid' : ''; ?>"
                    type="text" name="fullname" value="<?= old('fullname', session()->get('fullname') ?? '') ?>"
                    placeholder="Nama Lengkap *" required />
                <div class="invalid-feedback">
                    <?= validation_show_error('fullname'); ?>
                </div>
                <label for="fullname">Nama Lengkap *</label>
            </div>


            <!-- Email -->
            <div class="form-floating mb-2">
                <input id="email" class="form-control <?= (validation_show_error('email')) ? 'is-invalid' : ''; ?>"
                    type="email" name="email"
                    value="<?= old('email', $email ?? '') ?>"
                    placeholder="Alamat Email *" required autocomplete="email" />
                <div class="invalid-feedback">
                    <?= validation_show_error('email'); ?>
                </div>
                <label for="email">Alamat Email *</label>
            </div>

            <!-- Nomor HP -->
            <div class="form-floating mb-2">
                <input id="nomorHp" class="form-control <?= (validation_show_error('nomorHp')) ? 'is-invalid' : ''; ?>"
                    type="text" name="nomorHp"
                    value="<?= old('nomorHp', $nomorHp ?? '') ?>"
                    placeholder="Nomor HP *" required />
                <div class="invalid-feedback">
                    <?= validation_show_error('nomorHp'); ?>
                </div>
                <label for="nomorHp">Nomor HP *</label>
            </div>

            <!-- Domisili -->
            <div class="form-floating mb-2">
                <textarea class="form-control overlayscollbar <?= (validation_show_error('domisili')) ? 'is-invalid' : ''; ?>"
                    rows="5" type="text" name="domisili" id="domisili"
                    placeholder="Alamat domisili"><?= old('domisili', $domisili ?? '') ?></textarea>
                <label for="domisili">Alamat domisili</label>
                <div class="invalid-feedback mb-2">
                    <?= validation_show_error('domisili'); ?>
                </div>
            </div>

            <!-- Perusahaan -->
            <div class="form-floating mb-2">
                <input id="perusahaan" class="form-control <?= (validation_show_error('perusahaan')) ? 'is-invalid' : ''; ?>"
                    type="text" name="perusahaan"
                    value="<?= old('perusahaan', $perusahaan ?? '') ?>"
                    placeholder="Perusahaan" />
                <div class="invalid-feedback">
                    <?= validation_show_error('perusahaan'); ?>
                </div>
                <label for="perusahaan">Perusahaan</label>
            </div>

            <!-- Jabatan -->
            <div class="form-floating mb-2">
                <input id="jabatan" class="form-control <?= (validation_show_error('jabatan')) ? 'is-invalid' : ''; ?>"
                    type="text" name="jabatan"
                    value="<?= old('jabatan', $jabatan ?? '') ?>"
                    placeholder="Jabatan" />
                <div class="invalid-feedback">
                    <?= validation_show_error('jabatan'); ?>
                </div>
                <label for="jabatan">Jabatan</label>
            </div>

            <!-- Alamat Perusahaan -->
            <div class="form-floating mb-2">
                <textarea id="alamatPerusahaan" name="alamatPerusahaan"
                    class="form-control overlayscollbar <?= (validation_show_error('alamatPerusahaan')) ? 'is-invalid' : ''; ?>"
                    rows="5" type="text" placeholder="Alamat perusahaan"><?= old('alamatPerusahaan', $alamatPerusahaan ?? '') ?></textarea>
                <label for="alamatPerusahaan">Alamat perusahaan</label>
                <div class="invalid-feedback mb-2">
                    <?= validation_show_error('alamatPerusahaan'); ?>
                </div>
            </div>

            <!-- Jenis ID -->
            <div class="form-floating mb-2">
                <select class="form-control <?= (validation_show_error('id_type')) ? 'is-invalid' : ''; ?>" name="id_type" required>
                    <option value="ktp" <?= old('id_type') == 'ktp' ? 'selected' : ''; ?>>KTP</option>
                    <option value="sims" <?= old('id_type') == 'sims' ? 'selected' : ''; ?>>SIM</option>
                    <option value="pasport" <?= old('id_type') == 'pasport' ? 'selected' : ''; ?>>Paspor</option>
                </select>
                <label for="id_type">Jenis ID *</label>
                <div class="invalid-feedback">
                    <?= validation_show_error('id_type'); ?>
                </div>
            </div>

            <!-- Nomor ID -->
            <div class="form-group">
                <label for="nomor_id">Nomor ID*</label>
                <input type="text" name="nomor_id" id="nomor_id"
                    class="form-control"
                    value="<?= old('nomor_id', $nomor_id ?? '') ?>"
                    placeholder="Masukkan Nomor ID" required>
                <?php if (isset($validation) && $validation->hasError('nomor_id')): ?>
                    <div class="text-danger"><?= $validation->getError('nomor_id') ?></div>
                <?php endif; ?>
            </div>

            <!-- Jenis Kelamin -->
            <div class="form-floating mb-2">
                <select class="form-control <?= (validation_show_error('gender')) ? 'is-invalid' : ''; ?>" name="gender" required>
                    <option value="laki-laki" <?= old('gender') == 'laki-laki' ? 'selected' : ''; ?>>Laki-Laki</option>
                    <option value="perempuan" <?= old('gender') == 'perempuan' ? 'selected' : ''; ?>>Perempuan</option>
                </select>
                <label for="gender">Jenis Kelamin *</label>
                <div class="invalid-feedback">
                    <?= validation_show_error('gender'); ?>
                </div>
            </div>

            <!-- Metode Pembayaran -->
            <div class="form-floating mb-2">
                <select class="form-control <?= (validation_show_error('payment_method')) ? 'is-invalid' : ''; ?>" name="payment_method" required>
                    <option value="transfer" <?= old('payment_method') == 'transfer' ? 'selected' : ''; ?>>Transfer</option>
                    <option value="gopay" <?= old('payment_method') == 'gopay' ? 'selected' : ''; ?>>GoPay</option>
                    <option value="shoppepay" <?= old('payment_method') == 'shoppepay' ? 'selected' : ''; ?>>ShopeePay</option>
                    <option value="dana" <?= old('payment_method') == 'dana' ? 'selected' : ''; ?>>DANA</option>
                </select>
                <label for="payment_method">Metode Pembayaran *</label>
                <div class="invalid-feedback">
                    <?= validation_show_error('payment_method'); ?>
                </div>
            </div>

            <!-- Captcha -->
            <div class="g-recaptcha mb-2" data-sitekey="6LeXtpApAAAAAHXQ_XsWs-zpmKXd4bk9klTyQASw"></div>

            <!-- Tombol Kirim -->
            <button class="btn btn-outline-dark btn-lg mt-2" type="submit" data-aos="zoom-in">Kirim</button>
        </form>

    </div>
</div>
</div>
<?= $this->endSection() ?>

<?= $this->section('head') ?>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
    $(document).ready(function() {
        $("#id_provinsi").change(function(e) {
            var id_provinsi = $("#id_provinsi").val();
            $.ajax({
                type: "POST",
                url: "<?php echo base_url('payment/Kabupaten') ?>",
                data: {
                    id_provinsi: id_provinsi
                },
                dataType: "html", // Mengubah dataType menjadi html
                success: function(response) {
                    $("#id_kabupaten").html(response);
                },
                error: function(xhr, status, error) {
                    console.log("Error: " + error);
                }
            });
        });

        $("#id_kabupaten").change(function(e) {
            var id_kabupaten = $("#id_kabupaten").val();
            $.ajax({
                type: "POST",
                url: "<?php echo base_url('payment/Kecamatan') ?>",
                data: {
                    id_kabupaten: id_kabupaten
                },
                dataType: "html", // Mengubah dataType menjadi html
                success: function(response) {
                    $("#id_kecamatan").html(response);
                },
                error: function(xhr, status, error) {
                    console.log("Error: " + error);
                }
            });
        });
    });
</script>
<script src='https://www.google.com/recaptcha/api.js'></script>
<?= $this->endSection(); ?>