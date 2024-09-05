<?= $this->extend('layout/frontend_template') ?>
<?= $this->section('style') ?>
<style>
    body {
        overflow-x: hidden;
        margin: 0;
        padding: 0;
    }

    .navbar {
        background-color: transparent;
        border-bottom: none;
        transition: background-color 0.3s ease;
    }

    .navbar.navbar-dark .navbar-nav .nav-link {
        color: white;
    }

    .navbar.navbar-dark .navbar-toggler {
        background-color: white;
    }

    .navbar.scrolled {
        background-color: rgba(0, 0, 0, 0.8) !important;
    }

    /* Hero Section */
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
        height: 5px;
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

    /* Wave separator
    .wave-container {
        position: relative;
    }

    .wave {
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        height: auto;
        z-index: 1;
    } */
    .separator-wave {
        position: absolute;
        width: 100%;
        height: 610px;
        left: 47%;
        /* margin-left: 630px; */
        background-image: url('assets/img/separatorwave.svg');
        background-size: contain;
        background-repeat: no-repeat;

    }

    .separator-arrow-down-subtractive {
        position: absolute;
        width: 100vw;
        height: 128px;
        margin-top: 500px;
        left: 0;
        background-image: url('assets/img/separatorpaytv.svg');
        background-size: contain;
        background-repeat: no-repeat;
    }



    .title {
        font-size: 4rem;
        font-weight: bold;
        color: #fff;
        text-transform: uppercase;
        margin-bottom: 20px;
        font-family: 'Arcade Interlaced', sans-serif;
    }


    .subtitle {
        font-size: 1.5rem;
        color: #fff;
        margin-bottom: 40px;
        letter-spacing: 2px;
        font-family: 'Chakra Petch', sans-serif;
    }


    .cta-button {
        padding: 15px 30px;
        font-size: 1.2rem;
        font-weight: bold;
        color: #fff;
        background-color: #000;
        border: 4px solid #fff;
        text-transform: uppercase;
        transition: all 0.3s ease;
        font-family: 'Chakra Petch', sans-serif;

    }

    .cta-button:hover {
        background-color: transparent;
        color: #000;
    }

    .gradient {
        background: radial-gradient(ellipse at top left,
                rgba(128, 0, 128, 0.25),
                transparent 50%),
            radial-gradient(ellipse at top right,
                rgba(0, 128, 0, 0.25),
                transparent 50%),
            radial-gradient(ellipse at center right,
                rgba(0, 0, 255, 0.25),
                transparent 50%),
            radial-gradient(ellipse at center left,
                rgba(255, 192, 203, 0.25),
                transparent 50%);

        padding: 60px 0;
    }
</style>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<section class="hero-section">
    <div class="container" style="z-index: 1;">
        <div class="row">
            <div class="col">
                <div class="hero-content text-start" style="padding:0px 250px;">
                    <h1 class="chakra-petch-bold">Pay TV Services</h1>
                    <p class="arcade-interlaced-regular">DIGITAL TV SERVICE EMPLOYS FTTH TECHNOLOGY OFFERS NUMEROUS FREE TO AIR AND PREMIUM CHANNELS</p>
                    </br>
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

<div class="info-box rounded-0" style="padding: 20px; width: 50%; height: auto; max-width: 600px;">
    <div class="icon-container chakra-petch-regular" style="margin-bottom: 15px;">
        <div class="icon-item" style="flex: 1; padding: 5px;">
            <img src="assets/img/pay-tv/icons-tv.png" alt="Seamless" style="max-width: 40px; margin-bottom: 5px;">
            <h3 style="font-size: 1rem; margin-bottom: 5px;">Seamless</h3>
        </div>
        <div class="icon-item" style="flex: 1; padding: 5px;">
            <img src="assets/img/pay-tv/icons1-tv.png" alt="Clear" style="max-width: 40px; margin-bottom: 5px;">
            <h3 style="font-size: 1rem; margin-bottom: 5px;">Clear</h3>
        </div>
        <div class="icon-item" style="flex: 1; padding: 5px;">
            <img src="assets/img/pay-tv/icons2-tv.png" alt="Immersive" style="max-width: 40px; margin-bottom: 5px;">
            <h3 style="font-size: 1rem; margin-bottom: 5px;">Immersive</h3>
        </div>
        <div class="icon-item" style="flex: 1; padding: 5px;">
            <img src="assets/img/pay-tv/icons3-tv.png" alt="Extensive" style="max-width: 40px; margin-bottom: 5px;">
            <h3 style="font-size: 1rem; margin-bottom: 5px;">Extensive</h3>
        </div>
    </div>
    <div class="separator-line rounded-1" style="width: 50%; margin: 15px auto;"></div>
    <section class="darker-grotesque-regular" style="font-size: 0.9rem; line-height: 1.4;">
        <p>Our Pay TV Services leverage leading FTTH</p>
        <br>
        <p>(Fiber To The Home) technology to deliver amazing</p>
        <br>
        <p>digital television experiences directly to your doorstep.</p>
    </section>
</div>


<section>
    <div class="container-fluid">
        <div class="separator-arrow-down-subtractive align-self-end"></div>
        <div class="row">
            <div class="col-sm-6 p-0">
                <div class="separator-wave"></div>
                <img src="assets/img/Frame.png" alt="Frame" class="w-100 h-100 object-fit-cover">
            </div>
            <div class="col-sm-6 d-flex align-items-center justify-content-center bg-white">
                <h1 class="text-end me-5 mb-3 fs-1 chakra-petch-bold" style="color: #b71c1c; position: relative; top: -200px; font-weight:700;">Why?</h1>
                <div class="text-box p-4 rounded-0 position-box">

                    <p class="chakra-petch-light">
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

<section>
    <div class="row">
        <div class="col">

        </div>
    </div>
</section>


<div class="container-fluid gradient" style="background-color:#000; padding: 60px 0;">
    <div class="row">
        <div class="col text-center">
            <h1 class="title">GET READY</h1>
            <p class="subtitle">Experience the future of television</p>
            <button class="cta-button">GAME ON</button>
        </div>
    </div>
</div>


<?= $this->endSection() ?>

<?= $this->section('script') ?>
<script>
    document.addEventListener('scroll', function() {
        const navbar = document.querySelector('.navbar');
        if (window.scrollY > 50) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }
    });
</script>
<?= $this->endSection() ?>