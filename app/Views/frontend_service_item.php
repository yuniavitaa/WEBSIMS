<?= $this->extend('layout/frontend_template') ?>
<?= $this->section('style') ?>
<style>
    body {
        overflow-x: hidden;
        margin: 0;
        padding: 0;
    }

    .hero-section {
        position: relative;
        width: 100%;
        height: 100vh;
        background-image: url('assets/img/Background_PayTV.png');
        background-size: cover;
        background-position: center;
        color: white;
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
    }

    .hero-content h1 {
        margin: 0;
        font-size: 3rem;
        font-weight: bold;
        text-transform: uppercase;
    }

    .hero-content p {
        margin-top: 20px;
        margin-right: 20px;
        font-size: 1rem;
        letter-spacing: 2px;
    }

    .wood-background {
        position: relative;
        width: 100%;
        background-image: url('assets/img/image 25.png');
        background-size: cover;
        background-position: center;
        height: auto;
    }

    .info-box {
        position: absolute;
        margin-top: 200px;
        padding-right: 30px;
        padding-left: 30px;
        top: 55vh;
        left: 50%;
        transform: translateX(-50%);
        background: rgba(255, 255, 255, 0.95);
        padding-top: 30px;
        padding-bottom: 30px;
        border-radius: 10px;
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
        text-align: center;
        width: 60%;
        height: 60%;
        z-index: 2;
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
        font-size: 1.2rem;
        margin-bottom: 10px;
        color: #333;
    }

    .separator-line {
        width: 50%;
        height: 2px;
        background: url('assets/img/pay-tv/Line.png') no-repeat center;
        margin: 20px auto;
    }

    .info-box p {
        font-size: 1rem;
        margin-bottom: 0;
        color: #333;
    }

    .text-box {
        position: absolute;
        width: 40%;
        height: 300px;
        background-color: rgba(255, 255, 255, 0.9);
        border: 1px solid #B33F5E;
        border-radius: 8px;
    }

    .position-box {
        margin-top: 300px;
        left: 50%;
        transform: translate(-25%, -50%);
        z-index: 3;
    }
</style>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<section class="hero-section">
    <div class="container" style="z-index: 1;">
        <div class="row">
            <div class="col">
                <div class="hero-content text-start">
                    <h1>Pay TV Services</h1>
                    <p>DIGITAL TV SERVICE EMPLOYS FTTH TECHNOLOGY OFFERS NUMEROUS FREE TO AIR AND PREMIUM CHANNELS</p>
                    <a href="#" class="btn btn-outline-light btn-lg chakra-petch-medium">Selengkapnya</a>
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
    <div class="separator-line"></div>
    <p>Our Pay TV Services leverage leading FTTH (Fiber To The Home) technology to deliver amazing digital television experiences directly to your doorstep.</p>
</div>

<section>
    <div class="container-fluid ">
        <div class="row">
            <div class="col-sm-6 p-0">
                <img src="assets/img/Frame.png" alt="Frame" class="w-100 h-100 object-fit-cover">
            </div>
            <div class="col-sm-6 d-flex align-items-center justify-content-center bg-white">
                <h2 class="text-end me-5 mb-3 fs-1 " style="color: #b71c1c; position: relative; top: -200px;">Why?</h2>
                <div class="text-box p-4 rounded-0 position-box">
                    <p>
                        With a vast array of Free To Air channels alongside an enticing selection of Premium channels,
                        our service ensures that you have access to a diverse range of high-quality content,
                        catering to every interest and preference.
                    </p>
                    <button class="btn btn-outline-dark">SELENGKAPNYA</button>
                </div>
            </div>
        </div>
    </div>
</section>





<?= $this->endSection() ?>