<?= $this->extend('layout/frontend_template') ?>
<?= $this->section('style') ?>
<style>
    /* footer konten */
    body {
        overflow-x: hidden;
    }

    .hero {
        background-image: url('<?= base_url('assets/img/experience.png') ?>');
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

    .government-section {
        display: flex;
        align-items: center;
        background-size: cover;
    }

    /* line */
    .gradient-line {
        height: 6px;
        /* Ketebalan garis */
        width: 7%;
        background: linear-gradient(to right, #ff0000, #0000ff);
        /* Warna gradasi */
        margin: 20px auto;
        /* Jarak antara garis dan elemen lainnya */
    }
   .government-section {
    display: flex;
    align-items: stretch;
    min-height: 300px; /* Sesuaikan tinggi minimum sesuai kebutuhan */
}

.government-image {
    width: 100%;
    height: 100%;
    object-fit: cover; /* Gambar memenuhi kolom tanpa distorsi */
}

.col-md-6, .col-sm-8, .col-sm-4 {
    display: flex;
}
</style>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="hero">
    <div class="position-relative z-1 container">
        <div class="row">
            <div class="col">
                <p class="fs-6 my-3 chakra-petch-regular ">Discover How Our Decades worth of Experience Transforms Businesses Across Various Sectors</p>
                <h1 class="chakra-petch-bold">Elevating Connectivity:<br>Empowering Diverse Sectors</h1>
                <a href="#" class="btn">Selengkapnya</a>
            </div>
        </div>
    </div>
</div>
<!-- Gevorment -->
<div class="container-fluid government-section">
    <div class="row">
        <div class="col-md-6 d-flex align-items-center justify-content-center government-text">
            <div>
                <h4 class="text-experience mb-4 arcade-interlaced-semibold">GOVERNMENT</h4>
                <p class="chakra-petch-regular">It has experiences in telecommunications network, dedicated internet FO, VPN, SKPD Network, District/Village Internet, Training Assistance, Smart Government Consultation.</p>
            </div>
        </div>
        <div class="col-md-6 p-0">
            <img src="assets/img/exmedia.png" alt="Government Image" class="img-fluid government-image">
        </div>
    </div>
</div>
<br>

<!-- Logo Government -->
<div class="container">
    <div class="row">
        <div class="col d-flex justify-content-center">
            <img src="assets/img/exgev.png" alt="" style="width: 80%;">
        </div>
    </div>
</div>
<br>

<!-- Garis Gradasi -->
<div class="gradient-line my-4"></div>

<!-- Konten Sarjito -->
<div class="container-fluid government-section">
    <div class="row">
        <div class="col-sm-8 p-0">
            <img src="assets/img/exsarjito.png" alt="Slide 1" class="img-fluid government-image">
        </div>
        <div class="col-sm-4 d-flex align-items-center justify-content-center government-text">
            <div>
                <h4 class="text-experience mb-4 arcade-interlaced-semibold">BUSINESS/COMMERCIAL</h4>
                <p class="chakra-petch-regular">Dedicated Internet, Broadband Internet, SOHO, VPN.</p>
            </div>
        </div>
    </div>
</div>
<br>

<!-- Garis Gradasi -->
<div class="gradient-line my-4"></div>

<!-- Logo Sarjito -->
<div class="container">
    <div class="row">
        <div class="col d-flex justify-content-center">
            <img src="assets/img/exlogosarjito.png" alt="" style="width: 20%;">
        </div>
    </div>
</div>
<br>
<!-- Konten ISP -->
<div class="container-fluid government-section">
    <div class="row">
        <div class="col-md-6 government-text">
            <div class="d-flex align-items-center h-50 ">
                <div>
                    <h4 class="text-experience mb-4 arcade-interlaced-semibold">ISP/TELCO OPERATORS</h4>
                    <P class="chakra-petch-regular">Dark fiber, BTS-hotel, microcell 
                        <br> backbone</P>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <img src="assets/img/exisp.png" style="object-fit: cover;" >
        </div>
    </div>
</div>
<br>
<!-- Logo ISP -->
<div class="container">
    <div class="row">
        <div class="col d-flex flex-column align-items-center">
            <img src="assets/img/exlogoisp.png" alt="" style="width: 60%;">
            <img src="assets/img/exlogoisp2.png" alt="" style="width: 60%;">
        </div>
    </div>
</div>
<br>

<!-- Garis Gradasi -->
<div class="gradient-line my-4"></div>

<!-- Konten Hotel -->
<div class="container-fluid government-section">
    <div class="row">
        <div class="col-sm-8">
            <img src="assets/img/exhotel.png" alt="Slide 1" class="d-block w-100">
        </div>
        <div class="col-sm-4">
            <div class="d-flex align-items-center h-100 ">
                <div>
                    <h4 class="text-experience mb-4 arcade-interlaced-semibold">HOTEL</h4>
                    <p class="chakra-petch-regular">Pay TV, dedicated internet, WiFi, 
                        <br>hotspot access, MATV</p>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<!-- Logo Hotel -->
<div class="container">
    <div class="row">
        <div class="col d-flex justify-content-center">
            <img src="assets/img/exlogohotel.png" alt="" style="width: 50%;">
        </div>
    </div>
</div>
<br>

<!-- Garis Gradasi -->
<div class="gradient-line my-4"></div>

<!-- Konten apart -->
<div class="container-fluid government-section">
    <div class="row">
        <div class="col-md-6 government-text">
            <div class="d-flex align-items-center h-50 ">
                <div>
                    <h4 class="text-experience mb-4 arcade-interlaced-semibold">APARTMENT/REAL ESTATE</h4>
                    <P class="chakra-petch-regular">It has experiences in <br>telecommunications network, <br>dedicated internet FO, VPN, SKPD <br> Network, District/Village Internet,<br> Training Assistance, Smart <br> Government Consultation.</P>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <img src="assets/img/exaprt.png" style="object-fit: cover;">
        </div>
    </div>
</div>
<br>
<!-- Logo APART -->
<div class="container">
    <div class="row">
        <div class="col d-flex flex-column align-items-center">
            <img src="assets/img/exlogoapart.png" alt="" style="width: 20%;">
        </div>
    </div>
</div>
<br>

<!-- Garis Gradasi -->
<div class="gradient-line my-4"></div>

<!-- Konten Education -->
<div class="container-fluid government-section">
    <div class="row">
        <div class="col-sm-8">
            <img src="assets/img/exedu.png" alt="Slide 1" class="d-block w-100">
        </div>
        <div class="col-sm-4">
            <div class="d-flex align-items-center h-100 ">
                <div>
                    <h4 class="text-experience mb-4 arcade-interlaced-semibold">EDUCATION</h4>
                    <p class="chakra-petch-regular">Dedicated Internet, dark fiber,<br> interconnection, internship.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<!-- Logo Education -->
<div class="container">
    <div class="row">
        <div class="col d-flex justify-content-center">
            <img src="assets/img/exlogoedu.png" alt="" style="width: 50%;">
        </div>
    </div>
</div>
<br>

<!-- Garis Gradasi -->
<div class="gradient-line my-4"></div>

<!-- Konten Banking -->
<div class="container-fluid government-section">
    <div class="row">
        <div class="col-md-6 government-text">
            <div class="d-flex align-items-center h-50 ">
                <div>
                    <h4 class="text-experience mb-4 arcade-interlaced-semibold ">BANKING</h4>
                    <P class="chakra-petch-regular">Dedicated internet, broadband <br> internet, managed service, WiFi <br hotspot access.</P>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <img src="assets/img/exbank.png" style="object-fit: cover;">
        </div>     
    </div>
</div>
<br>
<!-- Logo APART -->
<div class="container">
    <div class="row">
        <div class="col d-flex flex-column align-items-center">
            <img src="assets/img/exlogobank.png" alt="" style="width: 60%;">
        </div>
    </div>
</div>
<br>

<?= $this->endSection() ?>