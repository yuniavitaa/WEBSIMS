<?= $this->extend('layout/frontend_template') ?>
<?= $this->section('style') ?>
<style>
    /* footer konten */
    .hero {
        background-image: url('<?= base_url('assets/img/experience.png') ?>');
        background-size: cover;
        background-position: center;
        height: 100vh;
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

</style>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="hero">
    <div class="position-relative z-1 container">
        <div class="row">
            <div class="col">
                <h1 class="fw-bold">Discover How Our Decades worth of Experience Transforms Businesses Across Various Sectors<br></h1>
                <p class="fs-6 my-3 Chakra Petch">Elevating Connectivity: Empowering Diverse Sectors</p>
                <a href="#" class="btn">Selengkapnya</a>
            </div>
        </div>
    </div>
</div>
<!-- Gevorment -->
<div class="container">
    <div class="row">
        <div class="col">
            <div class="d-flex align-items-center h-50 ">
                <div>
                    <h4 class="mb-4">PAY TV SERVICES</h4>
                    <h5>Digital TV service employs FTTH (fiber To The Home) technology and offers numerous Free To Air and Premium channels.</h5>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <img src="assets/img/exmedia.png" alt="Slide 2" class="img-fluid w-100">
        </div>
    </div>
</div>
<br>
<div class="container">
    <div class="row">
        <div class="col">
            <img src="assets/img/exgev.png" alt="">
        </div>
    </div>
</div>
<br>


<?= $this->endSection() ?>