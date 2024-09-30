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
        padding-top: 50px;
        /* Tambahkan padding agar gambar tidak terlalu tinggi */
    }

    .info-box {
        position: absolute;
        top: 20%;
        /* Mengatur posisi top lebih tinggi */
        left: 50%;
        transform: translate(-50%, -50%);
        padding-right: 30px;
        padding-left: 30px;
        background: rgba(255, 255, 255, 0.95);
        padding-top: 30px;
        padding-bottom: 30px;
        border-radius: 10px;
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
        text-align: center;
        width: 60%;
        height: auto;
        max-width: 600px;
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

    .separator-wave {
        position: absolute;
        width: 50vw;
        height: 93vh;
        right: 50%;
        background-image: url('assets/img/separatorwave.svg');
        background-size: auto 100%;
        background-repeat: no-repeat;
        background-position: right center;

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
        z-index: 10;
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
        background-image: linear-gradient(180deg,
                rgba(255, 255, 255, 0.01),
                rgba(255, 255, 255, 0) 85%),
            radial-gradient(ellipse at center left,
                rgba(128, 0, 128, 0.15),
                /* Purple */
                transparent 50%),
            radial-gradient(ellipse at center right,
                rgba(0, 128, 0, 0.15),
                /* Green */
                transparent 50%),
            radial-gradient(ellipse at center right,
                rgba(0, 0, 255, 0.15),
                /* Blue */
                transparent 50%),
            radial-gradient(ellipse at center left,
                rgba(255, 192, 203, 0.15),
                /* Pink */
                transparent 50%);
        padding: 96px 0;
    }
</style>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<section class="hero-section">
    <div class="container" style="z-index: 1;">
        <div class="row">
            <div class="col">
                <div class="hero-content text-start" style="padding:0px 250px;">
                    <h1 class="chakra-petch-bold">High-Speed Internet Access for Your Digital Future</h1>
                    <p class="arcade-interlaced-regular">Experience incredible speeds, maximum security, and stable connections at all times.</p>
                    <br>
                    <a href="#" class="btn btn-outline-light btn-lg chakra-petch-medium">Selengkapnya</a>
                </div>
            </div>
        </div>
    </div>
</section>

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