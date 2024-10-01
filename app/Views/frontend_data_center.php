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
            background-color: #f8f9fa;
        }
        .section-title {
            font-size: 36px;
            font-weight: bold;
        }
        .section-subtitle {
            font-size: 18px;
            color: #6c757d;
            margin-bottom: 30px;
        }
        .protection-item img {
            width: 80px;
            margin-bottom: 15px;
        }
        .protection-item h5 {
            font-size: 20px;
            margin-bottom: 10px;
        }
        .protection-item p {
            font-size: 16px;
            color: #6c757d;
        }
        .rounded-img {
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
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

<section id="data-center" class="data-center-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                <img src="<?= base_url('assets/img/datacenter.png') ?>" alt="Data Center ">
                </div>
                <div class="col-md-6">
                    <h4 class="mb-3">Server Collocation</h4>
                    <p>
                        Data Center kami menawarkan layanan server colocation dengan tingkat keamanan dan ketersediaan yang tinggi. Server Anda akan ditempatkan di lingkungan yang aman, dengan pemantauan 24/7 oleh tim profesional kami.
                    </p>
                </div>
            </div>
            <div class="row mt-5 text-center">
                <div class="col-md-4 protection-item">
                <img src="<?= base_url('assets/img/webapp.png') ?>" alt="Web Application Icon">
                    <h5>Cadangan Genset</h5>
                    <p>Genset cadangan yang handal memastikan operasi terus berlanjut selama pemadaman listrik.</p>
                </div>
                <div class="col-md-4 protection-item">
                <img src="<?= base_url('assets/img/webapp.png') ?>" alt="Web Application Icon">
                    <h5>UPS</h5>
                    <p>UPS (Uninterruptible Power Supply) memberikan cadangan daya segera selama gangguan listrik.</p>
                </div>
                <div class="col-md-4 protection-item">
                <img src="<?= base_url('assets/img/webapp.png') ?>" alt="Web Application Icon">
                    <h5>Spark Arrester</h5>
                    <p>Spark Arrester melindungi dari lonjakan listrik dan sambaran petir, memberikan perlindungan ekstra.</p>
                </div>
            </div>
        </div>
    </section>

    <?= $this->endSection() ?>