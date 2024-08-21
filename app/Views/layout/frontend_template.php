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
  <!-- Google Fonts Charmonman -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Charmonman:wght@400;700&display=swap" rel="stylesheet">
  <!-- Google Font Chakra Petch  -->
  <link href="https://fonts.googleapis.com/css2?family=Chakra+Petch:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <!-- MDB -->
  <link rel="stylesheet" href="assets/css/mdb.min.css" />
  <!-- Style -->
   <link rel="stylesheet" href="assets/css/style.css">
  <!-- Swiper -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

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
        <d class="row mt-3">
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
    <div class="text-start" style="padding-left: 90px; padding-right: 90px;">
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
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <script type="text/javascript"></script>
  <script>
    var swiper = new Swiper('#swiper-experience', {
      slidesPerView: 1,
      spaceBetween: 10,
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
    });
  </script>
  <script>
    var swiper = new Swiper('.swiper-container', {
      slidesPerView: 5, // Number of logos to display at once
      spaceBetween: 30, // Space between logos
      loop: true, // Enable looping of slides
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      autoplay: {
        delay: 2500, // Auto-slide every 2.5 seconds
        disableOnInteraction: false,
      },
    });
  </script>
  <script>
    var swiper = new Swiper(".mySwiper", {
      slidesPerView: 3,
      spaceBetween: 30,
      freeMode: true,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    });
  </script>

</body>

</html>