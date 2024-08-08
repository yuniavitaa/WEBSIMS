<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <title>PT SIMS</title>
  <!-- MDB icon -->
  <link rel="icon" href="img/SIMS.png" type="image/x-icon" />
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
  <!-- Google Fonts Roboto -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" />
  <!-- MDB -->
  <link rel="stylesheet" href="assets/css/mdb.min.css" />

  <?= $this->renderSection('style') ?>


</head>

<body>
  <!-- Navbar -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-black">
    <div class="container">
      <a class="navbar-brand" href="#">
        <img src="assets/img/SIMS.png" height="30" alt="SIMS Logo" loading="lazy" />
      </a>
      <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item"><a class="nav-link" href="#">Products</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Experiences</a></li>
          <li class="nav-item"><a class="nav-link" href="#">About Us</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Contact Us</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Blog</a></li>
        </ul>
      </div>
    </div>
    </div>
  </nav>
  <!-- Navbar -->

  <!-- Main content -->
  <?= $this->renderSection('content') ?>

  <!-- Footer -->
  <footer class="text-center text-lg-start text-muted-white pt-1 " style="background-color:#000000;">
    <!-- Section: Links  -->
    <section>
      <div class="container text-center text-md-start mt-5">
        <!-- Grid row -->
        <div class="row mt-3">
          <!-- Grid column -->
          <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
            <!-- Content -->
            <a class="navbar-brand" href="#">
              <img src="assets/img/SIMS.png" height="30" alt="SIMS Logo" loading="lazy" />
            </a>
            </br>
            <p>
              Wisma Kodel Lantai 8, Jl. HR Rasuna Said, Kuningan, Setiabudi, Jakarta Selatan
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">
              Kontak
            </h6>
            <p>
              <i class="fas fa-phone me-3"></i> +6281 **** ****
            </p>
            <p>
              <i class="fas fa-envelope me-3"></i> sims@gmail.com
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">
              Layanan
            </h6>
            <p>
              <a href="#!" class="text-reset">Internet</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Pengembangan Aplikasi</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Pelatihan</a>
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">Sosial Media</h6>
            <p>
              <a href="#!" class="text-reset"><i class="fab fa-twitter me-3"></i> X/Twitter</a>
            </p>
            <p>
              <a href="#!" class="text-reset"><i class="fab fa-instagram me-3"></i> Instagram</a>
            </p>
          </div>
          <!-- Grid column -->
        </div>
        <!-- Grid row -->
      </div>
    </section>
    <!-- Section: Links  -->

    <!-- Copyright -->
    <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
      © 2024 PT SIMS. All Rights Reserved
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Footer -->



  <!-- MDB -->
  <script type="text/javascript" src="assets/js/mdb.umd.min.js"></script>
  <?= $this->renderSection('script') ?>
  <!-- Custom scripts -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
  <script type="text/javascript"></script>
</body>

</html>