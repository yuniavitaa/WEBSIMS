<?= $this->extend('layout/frontend_template') ?>

<?= $this->section('style') ?>
<style>
        body {
            font-family: 'Chakra Petch';
            margin: 0;
            padding: 0;
        }
        .hero {
            background-image: url('<?= base_url('assets/img/Background.png') ?>');
            background-size: cover;
            background-position: center Chakra Petch;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
            text-align: center;
            position: relative;
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
        .hero p {
            font-size: 1.2em;
            margin: 10px 0;
            font-family: 'Arcade Interlaced';
        }
        .hero .btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #007BFF;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
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
            border-radius: 10px;
            cursor: pointer;
            transition: transform 0.3s;
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
        .service-item:hover .service-slideshow {
            opacity: 1;
        }
        .services {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 20px;
            padding: 20px;
            width: 100%;
            max-width: 1200px;
        }

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
            font-size: 20px;
        }

        .service-card p {
            font-size: 14px;
        }
        .service-slideshow p {
    margin-bottom: auto; /* Membuat ruang di antara paragraf dan tombol */
}

.service-slideshow {
    padding: 15px;
    text-align: justify;
    display: flex;
    flex-direction: column;
    justify-content: space-between; /* Untuk menempatkan tombol di bawah */
    height: 100%; /* Pastikan kontainer memiliki tinggi penuh */
}

        .more-btn {
    display: block;
    width: 80%; /* Lebar tombol */
    margin: 0 auto; /* Untuk menempatkan tombol di tengah secara horizontal */
    padding: 10px 0;
    background-color: #007bff;
    color: white;
    border: none;
    border-radius: 5px;
    text-align: center;
    transition: background-color 0.3s;
    cursor: pointer;
    margin-top: 20px; /* Opsional: jarak dari teks ke tombol */
}
.more-btn:hover {
    background-color: #0056b3;
}


    </style>
<?= $this->endSection() ?>


<?= $this->section('content') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Service</title>
    <link rel="stylesheet" href="<?= base_url('css/styles.css') ?>">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/> 
   
</head>
<body>
<div class="hero">
        <div class="hero-content">
            <h1>Elevate your digital experience to unprecedented heights</h1>
            <p>Explore our innovative, high-quality superior services</p>
            <a href="#services" class="btn btn-primary">Selengkapnya</a>
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
        <ul >
                <li>
                    Shared connections through wired (FTTH) or wireless media
                </li>
                <li>
                    Post or Pra Paid Service
                </li>
                <li>
                    Dedicated connection through Optical Fiber (PTP) or wireless media
                </li>
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
            <p>
                <ul>
                    <li>
                        Virtual Private Network solution with a variety og bandwidth according to needs
                    </li>
                    <li>
                        Feature: MRTG, 24/7 Technical Support
                    </li>
                </ul>
            </p>
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
            <p>
                <ul>
                    <li>
                        PTP connection from MSC ti MultimediaMicro Cell Pole
                    </li>
                    <li>
                        BTS Hotel
                    </li>
                </ul>
            </p>
            <button class="more-btn">Selengkapnya</button>
        </div>
    </div>

    <div class="service-item">
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

    <div class="service-item">
        <img src="<?= base_url('assets/img/training.png') ?>" alt="Training">
        <div class="service-info">
            Training
        </div>
        <div class="service-slideshow">
            <p>It is consultation and assistance service in the planning and development of smart city/digital government solutions, including training and mentoring
                services for increasing the capacity of MSMEa in the digital era in order to expand the impact of the digital acosystem
            </p>
            <button class="more-btn">Selengkapnya</button>
        </div>
    </div>
            
        </div>
        
    </div>

    <div class="card text-center mb-5" style="margin-top: 250px;">
        <h1>SIMS' SUITE OF VALUE-ADDED SERVICES</h1>
        <p>Improve Your Online Experience with Web and Mobile Applications, Custom Web Design, and Seamless Payment Gateways</p>
    </div>
   
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="service-card">
                    <img src="assets/img/webapp.png" alt="Web Application Icon">
                    <h3>Web Application</h3>
                    <p>Jaringan yang luas dan andal, menjangkau berbagai daerah dengan layanan berkualitas tinggi.</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="service-card">
                    <img src="assets/img/mobileapp.png" alt="Mobile Application Icon">
                    <h3>Mobile Application</h3>
                    <p>Jaringan yang luas dan andal, menjangkau berbagai daerah dengan layanan berkualitas tinggi.</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="service-card">
                    <img src="assets/img/webdesign.png" alt="Web Design Icon">
                    <h3>Web Design</h3>
                    <p>Jaringan yang luas dan andal, menjangkau berbagai daerah dengan layanan berkualitas tinggi.</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="service-card">
                    <img src="assets/img/payment.png" alt="Payment Gateway Icon">
                    <h3>Payment Gateway</h3>
                    <p>Jaringan yang luas dan andal, menjangkau berbagai daerah dengan layanan berkualitas tinggi.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="explore text-center mb-5" style="margin-top: 250px;">
        <h1>Get in touch with us today and explore how our service can elevate your multimediea experience</h1>
        <a href="#services" class="btn">Hubungi Kami</a>
    </div>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <!-- Swiper's JavaScript -->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
</body>
</html>


<?= $this->endSection() ?>
