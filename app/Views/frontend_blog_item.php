<?= $this->extend('layout/frontend_template') ?>
<?= $this->section('style') ?>
<style>
  .social-icons a {
    margin-right: 10px;
    font-size: 1.5rem;
    color: #000;
  }

  .recommended-articles img {
    width: 100%;
    height: auto;
  }

  .recommended-articles .card {
    border: none;
  }
  .col-lg-8 img {
  margin-bottom: 20px; /* Sesuaikan sesuai kebutuhan */
}

.col-lg-3 .recommended-articles {
  margin-top: 20px;
}
</style>
<?= $this->endSection() ?>
<?= $this->section('content') ?>
<br>
<br>
<br>
<div class="container my-5">
  <div class="row align-items-start">
    <!-- Blog Content Section -->
    <div class="col-lg-8">
      <p><small>Blog / News</small></p>
      <h1 class="fw-bold">PT SIMS has become the tenth decacorn company in Indonesia</h1>
      <p class="text-muted">Admin SIMS - 30 April 2024</p>

      <img src="assets/img/bgitem.png" alt="Gambar Utama" class="img-fluid my-4">

      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Nisl condimentum id venenatis a condimentum vitae. Semper risus in hendrerit gravida rutrum quisque non tellus. Nec ullamcorper sit amet risus nullam. Arcu ac tortor dignissim convallis aenean et tortor. Bibendum est ultricies integer quis auctor elit sed. A diam sollicitudin tempor id eu nisl nunc mi ipsum. Nunc congue nisi vitae suscipit. Nibh mauris cursus mattis molestie a iaculis at. Purus ut faucibus pulvinar elementum integer enim. Massa enim nec dui nunc mattis enim ut. Et netus et malesuada fames ac. Sodales neque sodales ut etiam sit.
        Morbi tristique senectus et netus. Eros donec ac odio tempor. Elit scelerisque mauris pellentesque pulvinar pellentesque habitant morbi tristique. Viverra nibh cras pulvinar mattis nunc sed. Tempus iaculis urna id volutpat lacus laoreet non. Adipiscing diam donec adipiscing tristique risus nec feugiat. Risus quis varius quam quisque id. Ultrices dui sapien eget mi proin. Porttitor rhoncus dolor purus non enim praesent elementum facilisis. Sed elementum tempus egestas sed sed.</p>
    </div>

    <!-- Sidebar Section -->
    <div class="col-lg-3">
      <div class="p-3 bg-light" style="box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
        <h5>Share</h5>
        <div class="d-flex justify-content-between mb-3">
          <img src="assets/img/iconsosmed.png" alt="TikTok" class="img-fluid" style="margin-right: auto;">
        </div>

        <h5>For You</h5>
        <div class="container recommended-articles">
          <div class="row align-items-start">
            <div class=" col d-flex align-items-center col-12 mb-3">
              <img src="assets/img/bigdng.png" class="img-fluid" alt="..." style="max-width: 100px; height: auto; margin-right: 10px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
              <div class="card-body p-0">
                <h6 class="card-title">Lorem Ipsum Dolor Sit Amet</h6>
              </div>
            </div>

            <div class=" col d-flex align-items-center col-12 mb-3">
              <img src="assets/img/bisunset.png" class="img-fluid" alt="..." style="max-width: 100px; height: auto; margin-right: 10px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
              <div class="card-body p-0">
                <h6 class="card-title">Lorem Ipsum Dolor Sit Amet</h6>
              </div>
            </div>

            <div class="col d-flex align-items-center col-12 mb-3">
              <img src="assets/img/bitv.png" class="img-fluid" alt="..." style="max-width: 100px; height: auto; margin-right: 10px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
              <div class="card-body p-0">
                <h6 class="card-title">Lorem Ipsum Dolor Sit Amet</h6>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>
</div>

<?= $this->endSection() ?>