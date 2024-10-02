<?= $this->extend('layout/frontend_template') ?>
<?= $this->section('style') ?>
<style>
    body {
        overflow-x: hidden;
    }

    .hero {
        background-image: url('<?= base_url('assets/img/centerdata.png') ?>');
        background-size: cover;
        background-position: center;
        height: 100vh;
        width: 100%;
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

    .data-center-section {
        padding: 60px 0;
        background:rgba(77, 27, 40, 0.9);
        color: #fff;
    }

    .data-center-section h2 {
        text-align: center;
        margin-bottom: 50px;
        font-weight: bold;
        font-size: 36px;
        letter-spacing: 1px;
    }

    .data-center-section p {
        font-size: 16px;
        line-height: 1.8;
    }

    .feature-card {
        background-color: #fff;
        border-radius: 15px;
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease-in-out;
        height: 100%;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }

    .feature-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 12px 30px rgba(0, 0, 0, 0.2);
    }

    .feature-icon {
        font-size: 50px;
        background: linear-gradient(45deg, #007bff, #00d2ff);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        margin-bottom: 20px;
    }

    @media (max-width: 768px) {
        .feature-card {
            margin-bottom: 20px;
        }
    }

    .col-lg-6 h4 {
        font-weight: bold;
        font-size: 24px;
    }

    .cta-section {
        margin-top: 60px;
        text-align: center;
    }

    .cta-button {
        background-color: #007bff;
        color: #fff;
        padding: 12px 30px;
        border-radius: 50px;
        font-weight: bold;
        transition: background-color 0.3s ease;
        text-transform: uppercase;
        font-size: 14px;
    }

    .cta-button:hover {
        background-color: #0056b3;
    }
</style>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="hero">
    <div class="position-relative z-1 container">
        <div class="row">
            <div class="col">
                <p class="arcade-interlaced-semibold" style="font-size: 55px;">DATA CENTER</p>
                <h4 class=" chakra-petch-regular ">Server Collocation Equipped with Electrical Protection</h4>
            </div>
        </div>
    </div>
</div>

<section class="data-center-section">
    <div class="container">
        <h2 class="chakra-petch-semibold">Data Center - Server Collocation</h2>
        <div class="row align-items-center">
            <!-- Server Collocation Info -->
            <div class="col-lg-6 mb-5">
                <p>Server collocation equipped with electrical <br> protection in the form generators, UPS, and <br> spark arrester are provided</p>
                <ul>
                    <li>Koneksi internet cepat dan stabil</li>
                    <li>Pendinginan yang terjamin</li>
                    <li>Pengelolaan keamanan fisik dan data</li>
                </ul>
            </div>

            <!-- Electrical Protection Features -->
            <div class="container py-5">
                <div class="row justify-content-center">
                    <!-- Genset -->
                    <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                        <div class="feature-card text-center p-4 text-dark">
                            <i class="bi bi-lightning-charge feature-icon"></i>
                            <h5>Genset</h5>
                            <p>Backup power yang selalu tersedia untuk menjaga server tetap aktif selama pemadaman listrik.</p>
                        </div>
                    </div>
                    <!-- UPS -->
                    <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                        <div class="feature-card text-center p-4 text-dark">
                            <i class="bi bi-battery-charging feature-icon"></i>
                            <h5>UPS</h5>
                            <p>Uninterruptible Power Supply untuk memastikan pasokan listrik tidak terputus.</p>
                        </div>
                    </div>
                    <!-- Spark Arrester -->
                    <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                        <div class="feature-card text-center p-4 text-dark">
                            <i class="bi bi-shield feature-icon"></i>
                            <h5>Spark Arrester</h5>
                            <p>Perlindungan dari lonjakan tegangan untuk menjaga perangkat dari kerusakan.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Call to Action -->
            <div class="cta-section">
                <a href="#" class="cta-button">Pelajari Lebih Lanjut</a>
            </div>
        </div>
</section>

<?= $this->endSection() ?>