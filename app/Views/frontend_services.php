<?= $this->extend('layout/frontend_template') ?>

<?= $this->section('style') ?>
<style>
    body {
        font-family: 'Chakra Petch', sans-serif;
        margin: 0;
        padding: 0;
        overflow-x: hidden;
    }

    .hero {
        background-image: url('<?= base_url('assets/img/Background.png') ?>');
        background-size: cover;
        background-position: center;
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        color: white;
        position: relative;
    }

    .hero a {
        padding: 12px 30px;
        background-color: #fff;
        color: #000;
        text-decoration: none;
        font-size: 18px;
        border-radius: 5px;

    }

    .hero::after {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
    }

    .hero-content {
        position: relative;
        z-index: 1;
    }

    .hero h1 {
        font-size: 3em;
        margin: 0;

    }

    .hero .btn {
        background-color: transparent;
        border: 1px solid white;
        color: white;
        padding: 0.75rem 2rem;
        text-transform: uppercase;
    }

    .hero .btn:hover {
        background-color: #0056b3;
    }

    .service-section {
        display: flex;
        align-items: center;
        padding: 50px;
        background-color: #f9f9f9;
    }

    .service-content {
        padding: 50px;
        text-align: center;
    }

    .service-content h2 {
        font-size: 2em;
        margin-bottom: 20px;
    }

    .service-content p {
        font-size: 1.2em;
        margin-bottom: 20px;
    }

    .service-content img {
        max-width: 20%;
        height: auto;
    }

    .service-section img {
        max-width: 100%;
        height: auto;
        border-radius: 5px;
    }

    .service-text {
        padding-left: 30px;
    }

    .services-container {
        display: flex;
        flex-wrap: wrap;
        gap: 20px;
        justify-content: center;
        padding: 20px;
    }

    .service-item {
        position: relative;
        width: 300px;
        height: 200px;
        overflow: hidden;
        border: 1px solid #ddd;
        cursor: pointer;
        transition: transform 0.3s;
        overflow: hidden;
        /* Mencegah konten keluar dari batas elemen */
        box-sizing: border-box;
        /* Memastikan padding dihitung dalam ukuran elemen */
        font-size: 14px;
        /* Sesuaikan ukuran font untuk layar lebih kecil */
    }

    .service-item img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.3s;
    }

    .service-item:hover img {
        transform: scale(1.1);
    }

    .service-item .service-info {
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        background: rgba(0, 0, 0, 0.5);
        color: white;
        padding: 10px;
        box-sizing: border-box;
        transition: opacity 0.3s;
        font-family: "Chakra Petch", sans-serif;
        font-weight: 700;
        font-style: normal;
    }

    .service-item:hover .service-info {
        opacity: 0;
    }

    .service-item .service-slideshow {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        background: rgba(0, 0, 0, 0.8);
        color: white;
        opacity: 0;
        transition: opacity 0.3s;
    }

    @media (max-width: 768px) {
        .service-item {
            flex: 1 1 calc(50% - 40px);
        }
    }

    .service-item:hover .service-slideshow {
        opacity: 1;
    }

    /* Membuat container/row pada bagian detail/description web,mobile, web design, payment gateway*/

    .service-card {
        background-color: #987D9A;
        border: 2px solid #fff;
        padding: 20px;
        text-align: center;
    }

    .service-card img {
        width: 50px;
        margin-bottom: 20px;
    }

    .service-card h3 {
        margin-bottom: 10px;
        font-size: 14px;
        font-family: "Chakra Petch", sans-serif;
        font-weight: 700;

    }

    .service-card p {
        font-size: 14px;
        margin: 0;
        /* Mengurangi margin default untuk menghemat ruang */
        padding: 0;
        font-family: "Inter", sans-serif;
        font-weight: 400;

    }

    .service-slideshow p {
        margin-bottom: auto;
        /* Membuat ruang di antara paragraf dan tombol */
        margin: 0;
        padding: 5px 0;
        /* Kurangi padding untuk menghemat ruang */
        word-wrap: break-word;
        /* Memastikan kata-kata panjang tidak melampaui batas elemen */
        white-space: normal;
        /* Membiarkan teks terbungkus dan tidak melampaui batas */
        font-size: 10px;
        /* Sesuaikan ukuran font untuk layar lebih kecil */
    }

    /*sims' */
    .card h4 {
        font-family: 'Arcade Interlaced', sans-serif;

    }

    /*Improve your online */
    .card p {
        font-family: 'Chakra Petch', sans-serif;
    }

    .service-slideshow {
        padding: 15px;
        text-align: justify;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        /* Untuk menempatkan tombol di bawah */
        height: 100%;
        /* Pastikan kontainer memiliki tinggi penuh */
    }

    .service-slideshow ul {
        margin: 0;
        padding-left: 20px;
        list-style-type: disc;
        font-size: 10px;
        /* Sesuaikan ukuran font untuk layar lebih kecil */
    }

    .service-slideshow ul li {
        margin-bottom: 5px;
        font-size: 10px;
        /* Sesuaikan ukuran font untuk layar lebih kecil */
    }

    .more-btn {
        background-color: transparent;
        border: 1px solid white;
        color: white;
        padding: 8px 16px;
        text-transform: uppercase;

    }

    .more-btn:hover {
        background: linear-gradient(to right, #FF5F7E, #0056B3);
    }

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

    .text-swiper {
        font-family: 'Arcade Interlaced', sans-serif;
        font-weight: 600;

    }

    #swiper-experience h5 {
        font-family: "Chakra Petch", sans-serif;
        font-weight: 400;
        font-style: normal;
    }

    /* atas */
    .separator-arrow-down {
        position: absolute;
        width: 100%;
        height: 128px;
        left: 0;
        background-image: url('assets/img/lay1.svg');
        background-size: contain;
        background-repeat: no-repeat;
        margin-top:-185px;
    }

    .separator-arrow-down-alt {
        position: absolute;
        width: 100%;
        height: 200px;
        left: 0;
        background-image: url('assets/img/layer1.svg');
        background-size: contain;
        background-repeat: no-repeat;
        margin-top:75px;
    }
     /* bawah */
     .separator-arrow-down-custom{
        position: absolute;
        width: 100%;
        height: 128px;
        left: 0;
        background-image: url('assets/img/lay1.svg');
        background-size: contain;
        background-repeat: no-repeat;
        margin-top:-185px;

    } 
    
    .custom-section {
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
    .alt-section{
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

<div class="hero">
    <div class="position-relative z-1 container">
        <div class="row">
            <dEiv class="col">
                <h1 class="fw-bold">Elevate your digital<br>
                    experience to <br>
                    unprecedented heights</h1>
                <p class="fs-6 my-3 arcade-interlaced-regular">Explore our innovative, high-quality superior services</p>
                <a href="#" class="btn">Selengkapnya</a>
            </dEiv>
        </div>
    </div>
</div>

<div class="container ">
    <div class="swiper" id="swiper-experience">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="row">
                    <div class="col-sm-8">
                        <img src="<? ('assets/img/swiperpaytv.png') ?>" alt="Slide 1" class="d-block w-100">
                    </div>
                    <div class="col-sm-4">
                        <div class="d-flex align-items-center h-100 ">
                            <div>
                                <h4 class="text-swiper mb-4">PAY TV SERVICES</h4>
                                <h5>Digital TV service employs FTTH (fiber To The Home) technology and offers numerous Free To Air and Premium channels.</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="row">
                    <div class="col-sm-8">
                    <img src="<?= base_url('assets/img/swiperpaytv.png') ?>" alt="Slide 2" class="d-block w-100">
                    </div>
                    <div class="col-sm-4">
                        <div class="d-flex align-items-center h-100">
                            <div>
                                <h4 class="text-swiper mb-4">DATA CENTER</h4>
                                <h5>Server Collocation equipped with electrical protection in the form of generators, UPS, and Spark Arrester are provided</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
</div>


<div class="container mt-5">
    <div class="services-container">
        <div class="service-item">
            <img src="<?= base_url('assets/img/paytv.png') ?>" alt="Pay TV Service">
            <div class="service-info">
                Pay TV Service
            </div>
            <div class="service-slideshow">
                <p>Digital TV service employs FTTH (Fiber To The Home) technology and offers numerous Free To Air and Premium Channels.</p>
                <button class="more-btn">Selengkapnya</button>
            </div>
        </div>

        <div class="service-item">
            <img src="<?= base_url('assets/img/highspeed.png') ?>" alt="High Speed Internet Access">
            <div class="service-info">
                High Speed Internet Access
            </div>
            <div class="service-slideshow">
                <p>
                <ul>
                    <li>Shared connections through wired (FTTH) or wireless media</li>
                    <li>Post or Pra Paid Service</li>
                    <li>Dedicated connection through Optical Fiber (PTP) or wireless media</li>
                </ul>
                <button class="more-btn">Selengkapnya</button>
            </div>
        </div>

        <div class="service-item">
            <img src="<?= base_url('assets/img/vpn.png') ?>" alt="VPN Service">
            <div class="service-info">
                VPN Service
            </div>
            <div class="service-slideshow">
                <ul>
                    <li>Virtual Private Network solution with a variety of bandwidth according to needs</li>
                    <li>Feature: MRTG, 24/7 Technical Support</li>
                </ul>
                <button class="more-btn">Selengkapnya</button>
            </div>
        </div>

        <div class="service-item">
            <img src="<?= base_url('assets/img/datacenter.png') ?>" alt="Data Center ">
            <div class="service-info">
                Data Center
            </div>
            <div class="service-slideshow">
                <p>Server Collocation equipped with electrical protection in the form of generators, UPS, and Spark Arrester are provided</p>
                <button class="more-btn">Selengkapnya</button>
            </div>
        </div>

        <div class="service-item">
            <img src="<?= base_url('assets/img/darkfiber.png') ?>" alt="Dark Fiber Connection">
            <div class="service-info">
                Dark Fiber Connection
            </div>
            <div class="service-slideshow">
                <p>PTP connection is available to Service Providers Talco Operations</p>
                <button class="more-btn">Selengkapnya</button>
            </div>
        </div>

        <div class="service-item">
            <img src="<?= base_url('assets/img/bts.png') ?>" alt="BTS Hotel/Multimedia Micro Cell Pole">
            <div class="service-info">
                BTS Hotel/Multimedia Micro Cell Pole
            </div>
            <div class="service-slideshow">
                <ul>
                    <li>
                        PTP connection from MSC ti MultimediaMicro Cell Pole
                    </li>
                    <li>
                        BTS Hotel
                    </li>
                </ul>

                <button class="more-btn">Selengkapnya</button>
            </div>
        </div>

        <div class="service-item mb-5">
            <img src="<?= base_url('assets/img/vsat.png') ?>" alt="VSAT">
            <div class="service-info">
                VSAT
            </div>
            <div class="service-slideshow">
                <p>Very Small Aperture Terminal (VSAT) service is a solution to accommodatatelecomunications needs in areas notcovered
                    by terrestrial networks for the needs of users with fixed, Maving or Mobile locations
                </p>
                <button class="more-btn">Selengkapnya</button>
            </div>
        </div>

        <div class="service-item mb-5">
            <img src="<?= base_url('assets/img/training.png') ?>" alt="Training">
            <div class="service-info">
                Training
            </div>
            <div class="service-slideshow">
                <p>It is consultation and assistance service in the planning and development of smart city/digital government solutions,
                <p>including training and mentoring services for increasing the capacity of MSMEa in the digital era in order to expand the impact of the digital acosystem</p>

                </p>
                <button class="more-btn">Selengkapnya</button>
            </div>
        </div>

    </div>

</div>
<br>

<section class="alt-section text-white d-flex" style="background-color: #000; color: white;">
    <div class="separator-arrow-down align-self-start"></div>
    <div class="container ">
        <div class="row">
            <div class="col text-center">
                <div>
                        <h4 class="arcade-interlaced-semibold">SIMS' SUITE OF VALUE-ADDED SERVICES</h4>
                        <div class="separator-arrow-down-alt align-self-end"></div>
                        <p class="chakra-petch-regular">Improve Your Online Experience with Web and Mobile Applications, Custom Web Design, <br> and Seamless Payment Gateways</p>
                    </div>

                </div>
            </div>
        </div>


</section>
<div class="middle-red-section" style="background-color: #4D1B28; padding: 100px;">
    <br>
    <div class="container mt-5">
        <div class="row text-center">
            <div class="col-md-3 ">
                <div class="service-card">
                <img src="<?= base_url('assets/img/webapp.png') ?>" alt="Web Application Icon">
                    <h3>Web Application</h3>
                    <p>Jaringan yang luas dan andal, menjangkau berbagai daerah dengan layanan berkualitas tinggi.</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="service-card">
                <img src="<?= base_url('assets/img/webdesign.png') ?>" alt="Mobile Application Icon">
                    <h3>Mobile Application</h3>
                    <p>Jaringan yang luas dan andal, menjangkau berbagai daerah dengan layanan berkualitas tinggi.</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="service-card">
                    <img src="<?= ('assets/img/webdesign.png') ?>" alt="Web Design Icon">
                    <h3>Web Design</h3>
                    <p>Jaringan yang luas dan andal, menjangkau berbagai daerah dengan layanan berkualitas tinggi.</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="service-card">
                    <img src="<? ('assets/img/payment.png') ?>" alt="Payment Gateway Icon">
                    <h3>Payment Gateway</h3>
                    <p>Jaringan yang luas dan andal, menjangkau berbagai daerah dengan layanan berkualitas tinggi.</p>
                </div>
            </div>
        </div>
    </div>
</div>


<section class="custom-section text-white d-flex" style="background-color: #000; color: white;">
    <div class="separator-arrow-down-custom align-self-start"></div>
    <div class="container text-center">
        <div class="row">
            <div class="col">
                <div>
                    <h1 class="text-center">Get in touch with us today and explore how our service <br> can elevate your multimedia experience</h1>
                    <a href="#" class="btn btn-outline-light btn-lg ">Hubungi Kami</a>
                </div>
            </div>
        </div>
        </div>
</section>

<?= $this->endSection() ?>