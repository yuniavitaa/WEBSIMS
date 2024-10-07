<?= $this->extend('layout/frontend_template') ?>
<?= $this->section('style') ?>
<style>
      body {
        overflow-x: hidden;
    }

    .hero {
        background-image: url('<?= base_url('assets/img/kontendarkviber.png') ?>');
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
   
    .btn-viber {
      background-color: #5a00b1;
      border-color: #5a00b1;
      color: #fff;
    }
    .btn-viber:hover {
      background-color: #3e007d;
      border-color: #3e007d;
    }
   .section-title {
      font-size: 2.5rem;
      font-weight: bold;
      text-align: center;
      margin-bottom: 30px;
    }
    .card {
      background-color: #1f1f1f;
      border: none;
    }
    .card-title {
      font-size: 1.25rem;
      color: #5a00b1;
    }
    /* Styling for the uploaded image and text */
    .hero-section {
      text-align: center;
      padding: 50px 0;
    }
    .hero-section img {
      max-width: 100%;
      height: auto;
      border-radius: 10px;
    }
    .hero-text {
      margin-top: 20px;
    }
    .hero-title {
      font-size: 2.5rem;
      color: #023e8a;
      font-weight: bold;
    }
    .hero-subtitle {
      color: #adb5bd;
      font-size: 1.3rem;
    }
    .features, .services, .cta {
      margin-top: 50px;
    }
    .feature-item, .service-item {
      text-align: center;
    }
    .feature-item i, .service-item i {
      font-size: 3rem;
      color: #5a00b1;
    }
    .cta-section {
      background-color: #023e8a;
      color: white;
      padding: 50px 0;
    }
    .cta-title {
      font-size: 2rem;
      font-weight: bold;
      margin-bottom: 20px;
    }
</style>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="hero">
    <div class="position-relative z-1 container">
        <div class="row">
            <div class="col">
                <p class="arcade-interlaced-semibold" style="font-size: 55px;">Dark Viber Connection</p>
                <h4 class=" chakra-petch-regular ">PTP connection untuk Service Provider ataupun Telco Operator</h4>
            </div>
        </div>
    </div>
</div>

<section class="features py-5">
    <div class="container">
      <h2 class="section-title">Fitur Unggulan</h2>
      <div class="row">
        <div class="col-md-4 feature-item">
          <i class="bi bi-speedometer2"></i>
          <h5 class="card-title">Kecepatan Tinggi</h5>
          <p>Transmisi data ultra-cepat dengan teknologi fiber optik terbaik, memastikan koneksi tanpa hambatan.</p>
        </div>
        <div class="col-md-4 feature-item">
          <i class="bi bi-shield-lock"></i>
          <h5 class="card-title">Keamanan Maksimal</h5>
          <p>Proteksi tingkat tinggi dengan enkripsi canggih, menjaga keamanan data Anda dari ancaman cyber.</p>
        </div>
        <div class="col-md-4 feature-item">
          <i class="bi bi-headset"></i>
          <h5 class="card-title">Dukungan 24/7</h5>
          <p>Tim ahli kami siap memberikan dukungan teknis kapanpun Anda butuhkan, 24/7.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Services Section -->
  <section class="services py-5">
    <div class="container">
      <h2 class="section-title">Layanan Kami</h2>
      <div class="row">
        <div class="col-md-4 service-item">
          <i class="bi bi-cloud-arrow-up"></i>
          <h5 class="card-title">Colocation Services</h5>
          <p>Layanan penyimpanan data dengan pusat data terdistribusi, mendukung operasional bisnis Anda dengan aman dan terkelola.</p>
        </div>
        <div class="col-md-4 service-item">
          <i class="bi bi-diagram-3"></i>
          <h5 class="card-title">Managed Services</h5>
          <p>Paket layanan yang dikelola penuh, memberikan kemudahan pengelolaan infrastruktur jaringan untuk bisnis Anda.</p>
        </div>
        <div class="col-md-4 service-item">
          <i class="bi bi-wifi"></i>
          <h5 class="card-title">Dedicated Internet Access</h5>
          <p>Koneksi internet khusus dengan bandwidth tinggi dan stabilitas unggul, dirancang untuk kebutuhan korporasi.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Call to Action Section -->
  <section class="cta-section text-center">
    <div class="container">
      <h2 class="cta-title">Siap Menghubungkan Bisnis Anda dengan Teknologi Terbaik?</h2>
      <p>Jangan ragu untuk mencoba layanan Dark Viber Connection dan dapatkan solusi koneksi terbaik untuk bisnis Anda.</p>
      <a href="#" class="btn btn-viber btn-lg">Hubungi Kami Sekarang</a>
    </div>
  </section>

<?= $this->endSection() ?>