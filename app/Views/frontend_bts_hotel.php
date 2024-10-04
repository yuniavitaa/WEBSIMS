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

    .description-section {
        padding: 60px 0;
        background: linear-gradient(135deg, #e0e0e0, #f9f9f9);
        border-radius: 20px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .description-section h2 {
        text-align: center;
        color: #d9534f;
        font-size: 2.5rem;
        margin-bottom: 30px;
        position: relative;
    }

    .description-section h2::before {
        content: '';
        position: absolute;
        left: 50%;
        bottom: -10px;
        width: 60px;
        height: 4px;
        background-color: #d9534f;
        transform: translateX(-50%);
    }

    .description-section p {
        font-size: 1.2rem;
        text-align: justify;
        line-height: 1.8;
        color: #555;
    }

    .description-section .icon-box {
        display: flex;
        align-items: center;
        margin-bottom: 20px;
    }

    .description-section .icon-box i {
        font-size: 2rem;
        color: #d9534f;
        margin-right: 15px;
    }

    .feature-list {
        margin-top: 40px;
    }

    .feature-list li {
        font-size: 1.2rem;
        margin-bottom: 15px;
    }

    .feature-list li::before {
        content: '✔️';
        margin-right: 10px;
        color: #5bc0de;
    }

    .table-section {
        background-color: #f9f9f9;
        padding: 60px 0;
    }

    .table-section h3 {
        color: #5bc0de;
        margin-bottom: 30px;
    }

    .gallery-section {
        padding: 60px 0;
    }

    .gallery-section h2 {
        text-align: center;
        color: #d9534f;
        margin-bottom: 40px;
    }

    .gallery-section img {
        width: 100%;
        border-radius: 10px;
        transition: all 0.3s ease-in-out;
    }

    .gallery-section img:hover {
        transform: scale(1.05);
    }

    .cta-section {
        background-color: #333;
        color: white;
        padding: 60px 0;
        text-align: center;
    }

    .cta-section h2 {
        font-size: 2.5rem;
        margin-bottom: 30px;
    }

    .cta-section a {
        background-color: #d9534f;
        color: white;
        padding: 15px 50px;
        text-decoration: none;
        border-radius: 50px;
        font-weight: bold;
        transition: background-color 0.3s ease-in-out;
    }

    .cta-section a:hover {
        background-color: #c9302c;
    }
</style>

<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="hero">
    <div class="position-relative z-1 container">
        <div class="row">
            <div class="col">
                <p class="arcade-interlaced-semibold" style="font-size: 30px;">BTS Hotel / Multimedia Micro Cell Pole</p>
                <h4 class=" chakra-petch-regular ">Koneksi PTP dari MSC sampai ke Multimedia Micro Cell Pole</h4>
            </div>
        </div>
    </div>
</div>

<section class="description-section">
    <div class="container">
        <h2>Layanan Kami</h2>
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="icon-box">
                    <i class="fa fa-network-wired"></i>
                    <p>
                        Kami menyediakan solusi jaringan yang andal untuk menghubungkan MSC hingga ke Multimedia Micro Cell Pole. Layanan kami didesain untuk meningkatkan kecepatan dan stabilitas konektivitas PTP.
                    </p>
                </div>
                <div class="icon-box">
                    <i class="fa fa-wifi"></i>
                    <p>
                        Dengan BTS Hotel, area yang sebelumnya sulit dijangkau kini dapat dilayani dengan konektivitas berkualitas tinggi yang memberikan jangkauan luas dan efisien.
                    </p>
                </div>
                <div class="icon-box">
                    <i class="fa fa-satellite-dish"></i>
                    <p>
                        Teknologi terbaru kami memungkinkan kemudahan instalasi dan pemeliharaan dengan infrastruktur yang fleksibel dan dapat diadaptasi sesuai kebutuhan spesifik.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Features List -->
<section class="description-section feature-list">
    <div class="container">
        <ul>
            <li>Jangkauan yang lebih luas dengan instalasi Micro Cell Pole</li>
            <li>Koneksi PTP yang stabil dan aman</li>
            <li>Pemeliharaan dan pengelolaan sistem yang efisien</li>
            <li>Kompatibel dengan berbagai teknologi jaringan</li>
            <li>Instalasi mudah dan cepat dengan waktu minimum</li>
        </ul>
    </div>
</section>

<!-- Specifications Table -->
<section class="table-section">
    <div class="container">
        <h3>Spesifikasi Teknis</h3>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Parameter</th>
                    <th>Detail</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Frekuensi</td>
                    <td>800MHz - 2600MHz</td>
                </tr>
                <tr>
                    <td>Jangkauan</td>
                    <td>5km - 20km</td>
                </tr>
                <tr>
                    <td>Kecepatan Maksimal</td>
                    <td>1Gbps</td>
                </tr>
                <tr>
                    <td>Konektivitas</td>
                    <td>Fiber Optic, Microwave</td>
                </tr>
                <tr>
                    <td>Redundansi</td>
                    <td>Dual Layer Backup</td>
                </tr>
            </tbody>
        </table>
    </div>
</section>

<!-- Gallery Section -->
<section class="gallery-section">
    <div class="container">
        <h2>Galeri Proyek</h2>
        <div class="row">
            <div class="col-md-4">
                <img src="https://via.placeholder.com/400x300" alt="Gallery Image 1">
            </div>
            <div class="col-md-4">
                <img src="https://via.placeholder.com/400x300" alt="Gallery Image 2">
            </div>
            <div class="col-md-4">
                <img src="https://via.placeholder.com/400x300" alt="Gallery Image 3">
            </div>
        </div>
    </div>
</section>

<section class="cta-section">
    <div class="container">
        <h2>Dapatkan Solusi Terbaik untuk Koneksi Anda</h2>
        <a href="#">Hubungi Kami Sekarang</a>
    </div>
</section>

<?= $this->endSection() ?>