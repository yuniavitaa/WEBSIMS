<?= $this->extend('layout/frontend_template') ?>
<?= $this->section('style') ?>
<style>
    body {
        overflow-x: hidden;
    }

    .hero-section {
        position: relative;
        width: 100%;
        height: 100vh;
        background-image: url('assets/img/Background_PayTV.png');
        background-size: cover;
        color: white;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .hero-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.5);
        /* z-index: 1; */
    }

    .hero-content {
     
    }

    

    .wood-background {
        position: relative;
        width: 100%;
        background-image: url('path/to/wood-background.png');
        background-size: cover;
        background-position: center;
        z-index: 1;
        height: auto;
    }

    .info-box {
        position: absolute;
        top: 55vh;
        left: 50%;
        transform: translateX(-50%);
        background: white;
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
        text-align: center;
        width: 50%;
        height: 50%;
        z-index: 3;
    }

    .icon-container {
        display: flex;
        justify-content: space-between;
        margin-bottom: 20px;
    }

    .icon-item {
        text-align: center;
        flex: 1;
        padding: 10px;
    }

    .icon-item img {
        max-width: 50px;
        margin-bottom: 10px;
    }

    .info-box h3 {
        font-size: 1.5rem;
        margin-bottom: 15px;
    }

    .info-box p {
        font-size: 1rem;
        margin-bottom: 0;
    }

    .separator-line {
        width: 50%;
        height: 2px;
        background-image: url('assets/img/pay-tv/Line.png');
        background-repeat: no-repeat;
        background-position: center;
        margin: 20px 0;

    }

    footer {
        z-index: 4;
    }
</style>
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<!-- Hero Section -->
<section class="hero-section">
    <div class="hero-overlay"></div>
    <div class="container" style="z-index: 1;">
        <div class="row">
            <div class="col">
                <div class="hero-content">
                    <h1>Connecting People</h1>
                    </br>
                    <h1 class="chakra-petch-regular">with Internet</h1>
                    <p>Empowering connectivity for tomorrow.</p>
                    <a href="#" class="btn btn-outline-light btn-lg chakra-petch-medium" data-mdb-ripple-init>Selengkapnya</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="wood-background">
    <div class="container-fluid" style="padding: 0;">
        <div class="row">
            <img src="assets/img/image 25.png" alt="Service Item" style="width: 100%; display: block;">
        </div>
    </div>
</section>

<div class="info-box rounded-0">
    <div class="icon-container">
        <div class="icon-item">
            <img src="assets/img/pay-tv/icons-tv.png" alt="Seamless">
            <h3>Seamless</h3>
        </div>
        <div class="icon-item">
            <img src="assets/img/pay-tv/icons1-tv.png" alt="Clear">
            <h3>Clear</h3>
        </div>
        <div class="icon-item">
            <img src="assets/img/pay-tv/icons2-tv.png" alt="Immersive">
            <h3>Immersive</h3>
        </div>
        <div class="icon-item">
            <img src="assets/img/pay-tv/icons3-tv.png" alt="Extensive">
            <h3>Extensive</h3>
        </div>
    </div>

    <!-- Garis separator -->
    <div class="separator-line pl-10 "></div>

    <p>Our Pay TV Services leverage leading FTTH (Fiber To The Home) technology to deliver amazing digital television experiences directly to your doorstep.</p>
</div>



<?= $this->endSection() ?>