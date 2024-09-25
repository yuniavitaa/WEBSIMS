<?= $this->extend('layout/frontend_template') ?>
<?= $this->section('style') ?>
<style>
    footer {
        padding-left: 16px;
        padding-right: 16px;
        background-color: white;
        color: black;
        justify-content: space-between;
    }

    footer a {
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

    .contact-section {
        background: linear-gradient(to bottom right, #f0f0f0, #d7d7ff);
    }
    .office-section{
        background: linear-gradient(to bottom right, #f0f0f0, #d7d7ff);
    }

    .social-media {
        background-image: linear-gradient(180deg,
                rgba(255, 255, 255, 0.01),
                rgba(255, 255, 255, 0) 85%),
            radial-gradient(ellipse at center left,
                rgba(128, 0, 128, 0.15),
                transparent 50%),
            radial-gradient(ellipse at center right,
                rgba(0, 128, 0, 0.15),
                transparent 50%),
            radial-gradient(ellipse at center right,
                rgba(0, 0, 255, 0.15),
                transparent 50%),
            radial-gradient(ellipse at center left,
                rgba(255, 192, 203, 0.15),
                transparent 50%);
        padding: 96px 0;
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
            <img src="assets/img/SIMS.png" height="30" alt="SIMS Logo" loading="lazy" />
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


<!-- Contact Form Section -->
<section class="contact-section py-5">
    <div class="container">
        <h2 class="mb-4 chakra-petch-bold">Hubungi Kami</h2>
        <div class="row">
            <div class="col-lg-6">
                <form action="#" method="POST">
                    <div class="mb-3" style="box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                        <input type="text" class="inter-reguler form-control" id="keperluan" placeholder="Keperluan">
                    </div>
                    <div class="mb-3" style="box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                        <textarea class="inter-reguler form-control" id="pesan" rows="3" placeholder="Pesan"></textarea>
                    </div>
                    <div class="col-md-4">
                        <div class="border p-2" style="background-color: white; border-color: #ccc;box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="notRobot">
                                <label class="form-check-label" for="notRobot">Saya bukan robot</label>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-light mt-3">Kirim</button>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- Social Media Section -->
<section class="social-media py-5 text-center" style="background-color: #000; color: white;">
    <h3 class="arcade-interlaced-semibold">TEMUKAN KAMI!</h3>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-4">
                <div class="social-icons mt-4">
                    <img src="<? ('assets/img/iconsosmed.png') ?>" alt="" class="img-fluid"style="width:200px;">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Office Section -->
<section class="office-section py-5">
    <div class="container text-center">
        <h3 class="arcade-interlaced-regular">OFFICE</h3>
        <p class="chakra-petch-regular">Wisma Kodel 8th Floor, Jl. HR Rasuna Said, <br> Kuningan, Setiabudi, Jakarta Selatan</p>
        <h5 class="chakra-petch-bold">Work Hour </h5>
        <p class="chakra-petch-regular">Monday – Friday: 9:00AM – 5:00PM<br>Saturday & Sunday: 11:00AM – 3:00PM</p>
        <div id="map" class="my-3">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.550211914924!2d106.8232843!3d-6.1908873!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f426bb4690fd%3A0x69328b07b4962966!2sPT%20Saranainsan%20Muda%20Selaras!5e0!3m2!1sid!2sid!4v1726547709893!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</section>

<?= $this->endSection() ?>