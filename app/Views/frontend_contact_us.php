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
                <li class="nav-item"><a class="nav-link" href="#">Contact Us</a></li>
                <li class="nav-item"><a class="nav-link" href="<?= base_url('blog') ?>">Blog</a></li>
            </ul>
        </div>
    </div>
    </div>
</nav>


<!-- Contact Form Section -->
<section class="contact-section py-5">
    <div class="container">
        <h2 class="text-center mb-4">Hubungi Kami</h2>
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <form action="#" method="POST">
                    <div class="mb-3">
                        <label for="keperluan" class="form-label">Keperluan</label>
                        <input type="text" class="form-control" id="keperluan" placeholder="Masukkan keperluan Anda">
                    </div>
                    <div class="mb-3">
                        <label for="pesan" class="form-label">Pesan</label>
                        <textarea class="form-control" id="pesan" rows="3" placeholder="Tulis pesan Anda di sini"></textarea>
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="notRobot">
                        <label class="form-check-label" for="notRobot">Saya bukan robot</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Kirim</button>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- Social Media Section -->
<section class="social-media-section py-5 text-center" style="background: #111; color: white;">
    <h3 class="arcade-interlaced-regular">TEMUKAN KAMI!</h3>
    <div class="social-icons mt-4">
        <img src="assets/img/iconsosmed.png" alt="" class="img-fluid" style="width:200px;">
    </div>
</section>

<!-- Office Section -->
<section class="office-section py-5">
    <div class="container text-center">
        <h3>OFFICE</h3>
        <p>Wisma Kodel 8th Floor, Jl. HR Rasuna Said, Kuningan, Setiabudi, Jakarta Selatan</p>
        <p><strong>Work Hours</strong><br>Monday – Friday: 9:00AM – 5:00PM<br>Saturday & Sunday: 11:00AM – 3:00PM</p>
        <div id="map" class="my-3">
            <img src="map-placeholder.jpg" alt="Map Location" class="img-fluid">
        </div>
    </div>
</section>

<?= $this->endSection() ?>