<?= $this->extend('layout/frontend_template') ?>

<?= $this->section('style') ?>
<style>
    .hero-section {
        position: relative;
        width: 100%;
        height: 100vh;
        background-image: url('assets/img/Background.png');
        background-size: cover;
        background-position: center;
        color: white;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .hero-content {
        z-index: 2;
    }

    .hero-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.5);
        z-index: 1;
    }

    .hero-content h1 {
        font-size: 3rem;
        margin-bottom: 1rem;
    }

    .hero-content p {
        font-size: 1.5rem;
        margin-bottom: 2rem;
    }

    .hero-content .btn {
        background-color: transparent;
        border: 1px solid white;
        color: white;
        padding: 0.75rem 2rem;
        text-transform: uppercase;
    }

    .small-icon {
        height: 100px;
        width: 100px;
    }

    .equal-height {
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        height: 100%;
    }

    .card-body {
        flex: 1;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }


    footer {
        background-color: black;
        color: white;
    }

    footer a {
        color: white;
    }

    footer a:hover {
        color: #ddd;
        /* or any color you prefer for hover effect */

    }

    @font-face {
        font-family: 'ArcadeFont';
        src: url('assets/font/ARCADE_I.TTF') format('truetype');
        font-weight: normal;
        font-style: normal;
    }

    h2 {
        font-family: 'ArcadeFont', sans-serif;

    }

    /* Menyesuaikan container Swiper */
    .swiper {
        width: 100%;
        height: 100%;
    }

    /* Menyesuaikan slide Swiper */
    .swiper-slide {
        display: flex;
        align-items: center;
        justify-content: center;
    }

    /* Menyesuaikan gambar agar sesuai dengan container */
    .swiper-slide img {
        max-width: 100%;
        height: auto;
        object-fit: cover;
    }

    /* Lebar dan tinggi khusus */
    .swiper-slide img {
        max-width: 100%;
        max-height: 400px;
        object-fit: cover;
    }

    section {
        width: 85%;
        max-width: 1250px;
    }

    .trusted-section img {
        width: auto;
        height: 80px;
        /* Menyetel tinggi gambar agar seragam */
        object-fit: contain;
        /* Memastikan gambar tetap proporsional */
        margin: 0 auto;
        display: block;
    }
</style>
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<!-- Hero Section -->
<header class="hero-section">
    <div class="hero-overlay"></div>
    <div class="hero-content">
        <h1>Connecting People with Internet</h1>
        <p>Empowering connectivity for tomorrow.</p>
        <a href="#" class="btn">Selengkapnya</a>
    </div>
</header>

<!-- Content for the home page -->
<div class="container text-center pt-5">
    <h2>Our Partner</h2>
    <div class="row">
        <div class="col-md-12 pt-5">
            <img src="assets/img/Group 2.png" alt="Partner 1" class="img-fluid">
        </div>
    </div>
    <div class="container text-center pt-5">
        <h2>About Us</h2>
        <p>PT SIMS facilitates digital living through access infrastructure, telecommunications networks,
            and information technology services.</p>
        <!-- Content for the home page -->
        <div class="row mt-4">
            <div class="col-md-3">
                <div class="card text-center equal-height">
                    <img src="assets/img/jaringan.png" class="card-img-top small-icon mx-auto" alt="Partner 1">
                    <div class="card-body">
                        <h5 class="card-title">Konektivitas Terluas</h5>
                        <p class="card-text">Jaringan yang luas dan andal, menjangkau berbagai daerah dengan layanan berkualitas tinggi.</p>
                        <a href="https://partner1.com" class="btn btn-primary" target="_blank">Visit Partner 1</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-center equal-height">
                    <img src="assets/img/teknologi.png" class="card-img-top small-icon mx-auto" alt="Partner 2">
                    <div class="card-body">
                        <h5 class="card-title">Teknologi Terkini</h5>
                        <p class="card-text">Teknologi mutakhir untuk memastikan kecepatan, stabilitas, dan efisiensi dalam setiap layanan.</p>
                        <a href="https://partner2.com" class="btn btn-primary" target="_blank">Visit Partner 2</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-center equal-height">
                    <img src="assets/img/support.png" class="card-img-top small-icon mx-auto" alt="Partner 3">
                    <div class="card-body">
                        <h5 class="card-title">Dukungan Terbaik</h5>
                        <p class="card-text">Layanan pelanggan siap membantu kapan saja, memastikan pengalaman pengguna yang memuaskan dan tanpa hambatan.</p>
                        <a href="https://partner3.com" class="btn btn-primary" target="_blank">Visit Partner 3</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-center equal-height">
                    <img src="assets/img/inovasi.png" class="card-img-top small-icon mx-auto" alt="Partner 4">
                    <div class="card-body">
                        <h5 class="card-title">Inovasi Berkelanjutan</h5>
                        <p class="card-text">Revolusi teknologi dengan inovasi berkelanjutan memastikan Anda selalu berada di garis depan perkembangan digital.</p>
                        <a href="https://partner4.com" class="btn btn-primary" target="_blank">Visit Partner 4</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <h1 style="font-weight: 900; margin-top: 100px; margin-bottom: 50px;">Carousel with text in slide</h1>
            <div class="swiper" id="swiper-experience">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="row">
                            <div class="col-sm-4">
                                <div>
                                    <h3>Experience</h3>
                                    <p>Regional Government Multimedia TV Studio</p>
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <img src="assets/img/Media.png" alt="Slide 1" class="d-block w-100">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="row">
                            <div class="col-sm-4">
                                <div>
                                    <h3>What is lorem ipsum</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <img src="assets/img/city.png" alt="Slide 2" class="d-block w-100">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
        </br>

    </div>
    <div class="container text-center pt-5">
        <h2>TRUSTED BY</h2>
        </br>
        <section class="swiper mySwiper trusted-section">
            <div class="wrapper swiper-wrapper">
                <div class="item swiper-slide">
                    <img src="assets/img/customer/image 5.png" alt="Logo DIY">
                </div>
                <div class="item swiper-slide">
                    <img src="assets/img/customer/image 6.png" alt="Logo Kominfo">
                </div>
                <div class="item swiper-slide">
                    <img src="assets/img/customer/image 7.png" alt="Logo Panti Rapih">
                </div>
                <div class="item swiper-slide">
                    <img src="assets/img/customer/image 8.png" alt="Logo RSUP Dr.Sardjito">
                </div>
                <div class="item swiper-slide">
                    <img src="assets/img/customer/image 9.png" alt="Logo Citranet">
                </div>
                <div class="item swiper-slide">
                    <img src="assets/img/customer/image 10.png" alt="Logo Indosat">
                </div>
                <div class="item swiper-slide">
                    <img src="assets/img/customer/image 11.png" alt="Logo Hyat Regency">
                </div>
                <div class="item swiper-slide">
                    <img src="assets/img/customer/image 12.png" alt="Logo UGM">
                </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </section>
    </div>
    <br>
</div>


</div>
<?= $this->endSection() ?>