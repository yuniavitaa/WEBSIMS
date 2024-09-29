<?= $this->extend('layout/frontend_template') ?>
<?= $this->section('style') ?>
<style>
 .navbar {
        padding-right: 16px;
        background-color: white;
        color: black;
        justify-content: space-between;
    }

    .navbar a {
        color: black;
        text-decoration: none;
    }

    .navbar-nav .nav-link {
        color: black;
        /* Warna teks hitam */
    }

    footer a:hover {
        color: #ddd;
    }

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
    margin-bottom: 20px;
    /* Sesuaikan sesuai kebutuhan */
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
<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-white shadow-lg">
  <div class="container">
    <a class="navbar-brand" href="#">
      <img src="<?= base_url ('assets/img/SIMS.png') ?>" height="30" alt="SIMS Logo" loading="lazy" />
    </a>
    <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('service') ?>">Products</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('experience') ?>">Experiences</a>
        </li>
        <li class="nav-item"><a class="nav-link" href="<?= base_url('about_us') ?>">About Us</a></li>
        <li class="nav-item"><a class="nav-link" href="<?= base_url('contact_us') ?>">Contact Us</a></li>
        <li class="nav-item"><a class="nav-link" href="<?= base_url('blog') ?>">Blog</a></li>
      </ul>
    </div>
  </div>
  </div>
</nav>
<div class="container mt-4">
  <div class="row">
    <!-- Bagian artikel -->
    <div class="col-lg-8">
      <p><small>Blog / News</small></p>
      <h1 class="fw-bold">PT SIMS has become the tenth decacorn company in Indonesia</h1>
      <p class="text-muted">Admin SIMS - 30 April 2024</p>

      <img src="<?= base_url ('assets/img/bgitem.png') ?>" alt="Gambar Utama" class="img-fluid my-4">
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Nisl condimentum id venenatis a condimentum vitae.
        Semper risus in hendrerit gravida rutrum quisque non tellus. Nec ullamcorper sit amet risus nullam. Arcu ac tortor dignissim convallis aenean et tortor. Bibendum est ultricies integer quis auctor elit sed. A diam sollicitudin tempor id eu nisl nunc mi ipsum.
        Nunc congue nisi vitae suscipit. Nibh mauris cursus mattis molestie a iaculis at. Purus ut faucibus pulvinar elementum integer enim. Massa enim nec dui nunc mattis enim ut.
        Et netus et malesuada fames ac. Sodales neque sodales ut etiam sit.
        Morbi tristique senectus et netus. Eros donec ac odio tempor. Elit scelerisque mauris pellentesque pulvinar pellentesque habitant morbi tristique. Viverra nibh cras pulvinar mattis nunc sed. Tempus iaculis urna id volutpat lacus laoreet non. Adipiscing diam donec adipiscing tristique risus nec feugiat. Risus quis varius quam quisque id. Ultrices dui sapien eget mi proin. Porttitor rhoncus dolor purus non enim praesent elementum facilisis. Sed elementum tempus egestas sed sed.</p>
    </div>

<br>
<br>
    <!-- Bagian Share/For You -->
    <div class="col-lg-3">
      <!-- Bagian Share -->
      <div class="share-section sticky-top p-3 bg-light" style="box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
        <h5>Share</h5>
        <div class="d-flex justify-content-between mb-3">
          <!-- Ikon share -->
          <img src="<?= base_url ('assets/img/iconsosmed.png') ?>" alt="TikTok" class="img-fluid" style="margin-right: auto;">

        </div>
        <hr>
        <!-- Bagian For You -->
        <h5>For You</h5>
        <div class="row for-you-section overflow-auto" style="max-height: 300px;">
          <div class=" col d-flex align-items-center col-12 mb-3">
            <img src="<?= base_url ('assets/img/bigdng.png') ?>" class="img-fluid" alt="..." style="max-width: 100px; height: auto; margin-right: 10px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
            <div class="card-body p-0">
              <h6 class="card-title">Lorem Ipsum Dolor Sit Amet</h6>
            </div>
          </div>

          <div class=" col d-flex align-items-center col-12 mb-3">
            <img src="<?= base_url ('assets/img/bisunset.png') ?>" class="img-fluid" alt="..." style="max-width: 100px; height: auto; margin-right: 10px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
            <div class="card-body p-0">
              <h6 class="card-title">Lorem Ipsum Dolor Sit Amet</h6>
            </div>
          </div>

          <div class="col d-flex align-items-center col-12 mb-3">
            <img src="<?= base_url ('assets/img/bitv.png" class="img-fluid') ?>" alt="..." style="max-width: 100px; height: auto; margin-right: 10px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
            <div class="card-body p-0">
              <h6 class="card-title">Lorem Ipsum Dolor Sit Amet</h6>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</div>


<?= $this->endSection() ?>