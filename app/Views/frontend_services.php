<?= $this->extend('layout/frontend_template') ?>

<?= $this->section('style') ?>
<style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
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
   
</head>
<body>
<div class="hero">
        <div class="hero-content">
            <h1>Elevate your digital experience to unprecedented heights</h1>
            <p>Explore our innovative, high-quality superior services</p>
            <a href="#services" class="btn btn-primary">Selengkapnya</a>
        </div>
    </div>

    <div id="services" class="container mt-5">
        <div class="service-section row">
            <div class="col-md-6">
                <img src="<?= base_url('/assets/img/servicetv.png') ?>" alt="Pay TV Services">
            </div>
            <div class="col-md-6 service-text">
                <h2 class="display-5">PAY TV SERVICES</h2>
                <p>Digital TV service employs FTTH (Fiber To The Home) technology 
                    and offers numerous Free To Air and Premium channels.</p>
                    <button class="more-btn">Selengkapnya</button>
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <h1 class="text-center mb-5">Our Services</h1>
        <div class="services-container">
            <div class="service-item">
                <img src="<?= base_url('assets/img/paytv.png') ?>" alt="Pay TV Service">
                <div class="service-info">
                    Pay TV Service
                </div>
                <div class="service-slideshow">Digital TV service employe FTTH (Fitur To The Home)technology and offers
                    numerous Free To Air and Premium Channels
                <button class="more-btn">Selengkapnya</button>
                </div>
            </div>
            <div class="service-item">
                <img src="<?= base_url('assets/img/highspeed.png') ?>" alt="High Speed Internet Access">
                <div class="service-info">High Speed Internet Access</div>
                <div class="service-slideshow">Slide 2 Content</div>
            </div>
            <div class="service-item">
                <img src="<?= base_url('assets/img/vpn.png') ?>" alt="VPN Service">
                <div class="service-info">VPN Service</div>
                <div class="service-slideshow">Slide 3 Content</div>
            </div>
            <div class="service-item">
                <img src="<?= base_url('assets/img/datacenter.png') ?>" alt="Data Center">
                <div class="service-info">Data Center</div>
                <div class="service-slideshow">Slide 3 Content</div>
            </div>

            <div class="service-item">
                <img src="<?= base_url('assets/img/darkfiber.png') ?>" alt="Dark Fiber Connection">
                <div class="service-info">Dark Fiber Connection</div>
                <div class="service-slideshow">Slide 3 Content</div>
            </div>

            <div class="service-item">
                <img src="<?= base_url('assets/img/bts.png') ?>" alt="BTS Hotel/Multimedia Micro Cell Pole">
                <div class="service-info">BTS Hotel/Multimedia Micro Cell Pole</div>
                <div class="service-slideshow">Slide 3 Content</div>
            </div>
            <div class="service-item">
                <img src="<?= base_url('assets/img/vsat.png') ?>" alt="VSAT">
                <div class="service-info">VSAT</div>
                <div class="service-slideshow">Slide 3 Content</div>
            </div>
            <div class="service-item">
                <img src="<?= base_url('assets/img/training.png') ?>" alt="Training">
                <div class="service-info">Training</div>
                <div class="service-slideshow">Slide 3 Content</div>
            </div>
        </div>
    </div>

    


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>


<?= $this->endSection() ?>
