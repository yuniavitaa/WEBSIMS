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
</style>
<?= $this->endSection() ?>
<?= $this->section('content') ?>
<br>
<div class="container my-5">
    <div class="row">
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
      <div class="col-lg-4">
        <div class="p-3 bg-light">
          <h5>Share</h5>
          <div class="social-icons mb-4">
          <a href="#"><i class="bi bi-twitter"></i></a>
            <a href="#"><i class="bi bi-instagram"></i></a>
            <a href="#"><i class="bi bi-facebook"></i></a>
            <a href="#"><i class="bi bi-tiktok"></i></a>
          </div>

          <h5>For You</h5>
          <div class=" container recommended-articles">
            <div class="row">
            <div class=" d-flex align-items-center col-lg-10 col-md-6 mb-4 ">
              <img src="assets/img/bigdng.png"class="img-fluid" alt="..." style="width: 100px; height: auto; margin-right: 10px;">
              <div class="card-body p-0" style="flex-grow: 1;">
                <h6 class="card-title">Lorem Ipsum Dolor Sit Amet </h6>
              </div>
            </div>
            </div>
            <div class="row">
            <div class="d-flex col-lg-10 col-md-6 mb-4">
              <img src="assets/img/bitv.png"class="img-fluid" alt="..." style="width: 100px; height: auto; margin-right: 10px;">
              <div class="card-body p-0" style="flex-grow: 1;">
                <h6 class="card-title">Lorem Ipsum Dolor Sit Amet</h6>
              </div>
            </div>
            </div>
            <div class="row">
            <div class="d-flex col-lg-10 col-md-6 mb-4">
              <img src="assets/img/bisunset.png" class="img-fluid" alt="..." style="width: 100px; height: auto; margin-right: 10px;">
              <div class="card-body p-0" style="flex-grow: 1;">
                <h6 class="card-title">Lorem Ipsum Dolor Sit Amet</h6>
              </div>
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

<?= $this->endSection() ?>