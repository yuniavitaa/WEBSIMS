<?= $this->extend('layout/frontend_template') ?>

<?= $this->section('style') ?>
<style>
</style>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="container mt-5">
    <h2>Payment Lifemedia</h2>

    <!-- Tab Navigation -->
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="langkah1-tab" data-toggle="tab" href="#langkah1" role="tab" aria-controls="langkah1" aria-selected="true">Langkah 1</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="langkah2-tab" data-toggle="tab" href="#langkah2" role="tab" aria-controls="langkah2" aria-selected="false">Langkah 2</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="langkah3-tab" data-toggle="tab" href="#langkah3" role="tab" aria-controls="langkah3" aria-selected="false">Langkah 3</a>
        </li>
    </ul>

    <!-- Tab Content -->
    <div class="tab-content" id="myTabContent">
        <div class="row">
            <div class="col-sm-4">
                <div class="form-group">
                    <label>Provinsi</label>
                    <select name="id_provinsi" class="form-control">
                        <option value="">----Pilih Provinsi---</option>
                        <?php foreach ($provinsi as $key => $value) { ?>
                            <option value="<?= $value['id_provinsi'] ?>"><?= $value['nama_provinsi'] ?></option>
                        <?php } ?>
                    </select>
                    <p class="text-danger"><?= ($validation->hasError('id_provinsi')) ? $validation->getError('id_provinsi') : '' ?></p>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="form-group">
                    <label>Kabupaten</label>
                    <select name="Jenis Kelamin" class="form-control">
                        <option value="">----Jenis Kelamin---</option>
                        <option value="L">Laki-Laki</option>
                        <option value="P">Perempuan</option>
                    </select>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="form-group">
                    <label>Kecamatan</label>
                    <select name="Jenis Kelamin" class="form-control">
                        <option value="">----Jenis Kelamin---</option>
                        <option value="L">Laki-Laki</option>
                        <option value="P">Perempuan</option>
                    </select>
                </div>
            </div>
        </div>









        <!-- Form Langkah 2 -->
        <div class="tab-pane fade" id="langkah2" role="tabpanel" aria-labelledby="langkah2-tab">
            <form>
                <h4 class="mt-3">Alamat</h4>
                <div class="form-group">
                    <label for="alamat">Alamat *</label>
                    <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat" required>
                </div>
            </form>
        </div>

        <!-- Form Langkah 3 -->
        <div class="tab-pane fade" id="langkah3" role="tabpanel" aria-labelledby="langkah3-tab">
            <form>
                <h4 class="mt-3">Keterangan</h4>
                <div class="form-group">
                    <label for="keterangan">Keterangan</label>
                    <textarea class="form-control" id="keterangan" name="keterangan" rows="3" placeholder="Keterangan"></textarea>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<?= $this->endSection() ?>